<x-layouts.app>
    <div>
        <h1>You need to Login</h1>
        <form action="./login" method="post">
            @csrf
            <input type="text" name="email" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <h4>Environment {{ env('APP_ENV') }}</h4>
    </div>

</x-layouts.app>