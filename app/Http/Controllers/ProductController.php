<?php

namespace App\Http\Controllers;

use App\Application\Command\AddProduct\AddProductCommand;
use App\Application\Command\AddProduct\AddProductRequest;
use App\Application\Command\EditProduct\EditProductCommand;
use App\Application\Command\EditProduct\EditProductRequest;
use App\Application\Command\ViewProduct\ViewProductCommand;
use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use App\Core\Models\User\Role;
use App\Core\Models\User\User;
use App\Core\Models\User\UserId;
use App\Core\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;
use Ramsey\Uuid\Uuid;
use Exception;

class ProductController extends Controller
{
    // this is for uhh..individual products I guess
    public function __construct(
        private SellerAccountQueryInterface $sellerAccountQuery,
        private ProductRepositoryInterface $productRepository
    )
    {
    }
    // mock funtion for testing UI
    public function testViewAll()
    {
        // This is only mock
        $user = new User(
            new UserId("3cdab866-1015-11ee-be56-0242ac120002"),
            "DuffAldri Ganteng",
            "dup@mail.com",
            "123qwe123",
            new Role("s")
        );
        $seller = $this->sellerAccountQuery->execute($user->getUserId());
//        $productArray = array(new Product(new ProductId(Uuid::uuid4()), 'a', 23, 11, 2, 'addxcyv', '$product->photourl'), new Product(new ProductId(Uuid::uuid4()), '你好同学们', 23, 11, 2, 'addxcyv', '$product->photourl'));
        $productArray = $this->productRepository->showByUserId($user->getUserId());
        return view('seller.main', [
            'seller' => $seller,
            'products' => $productArray,
        ]);
    }
    // mock funtion for testing UI
    public function testEdit()
    {
        $product = new Product(new ProductId(Uuid::uuid4()), 'a', 222, 11, 2, 'addxcyv', '$product->photourl');

        return view('seller.edit-product', [
            'product' => $product,
        ]);
    }
    // mock funtion for testing UI
    public function testEditId($id)
    {
        $product = new Product(new ProductId($id), 'a', 23, 11, 2, 'addxcyv', '$product->photourl');

        return view('seller.edit-product', [
            'product' => $product,
        ]);
    }
    public function Add()
    {
        return view('seller.add-product');
    }
    public function AddAction(Request $request, $id, AddProductCommand $command)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $weight = $request->input('weight');
        $stock = $request->input('stock');
        $description = $request->input('description');
        $addrequest = new AddProductRequest($name, $price, $weight, $stock, $description);
        try {
            $command->execute($addrequest);
        } catch (Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }
        return response()->redirectTo(route('seller_product', ['id' => $id]))
            ->with('success', 'berhasil_add');
    }
    public function Edit($id)
    {
        $product = $this->productRepository->byId($id);
        return view('seller.edit-product', [
            'product' => $product,
        ]);
    }
    public function EditAction(Request $request, $id, EditProductCommand $command)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $weight = $request->input('weight');
        $stock = $request->input('stock');
        $description = $request->input('description');
        $editrequest = new EditProductRequest($name, $price, $weight, $stock, $description);
        try {
            $command->execute($editrequest);
        } catch (Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }
        return response()->redirectTo(route('seller_product', ['id' => $id]))
            ->with('success', 'berhasil_edit');
    }

    public function SellerViewAll()
    {
        $productArray = $this->productRepository->show();
        return view('seller.main', [
            'products' => $productArray,
        ]);
    }
}
