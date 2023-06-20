<?php

namespace App\Core\Models\User;

class User
{
    private UserId $user_id;
    private string $name;
    private string $email;
    private string $password;
    private Role $role;

    public function __construct(
        UserId $user_id,
        string $name,
        string $email,
        string $password,
        Role $role
    ) {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return Role
     */
    public function getRole(): Role
    {
        return $this->role;
    }


}
