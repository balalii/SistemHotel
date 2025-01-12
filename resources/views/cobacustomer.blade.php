<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>customer berhasil</p>
    <form method="POST" action="{{ route('logoutCustomer') }}" class="flex items-center w-full p-2 text-gray-300 transition duration-75 rounded-lg pl-11 group hover:bg-gray-500 hover:text-gray-100 dark:text-white dark:hover:bg-gray-700">
                                @csrf
                                <a href="{{ route('logoutCustomer') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">Logout</a>
                                
                            </form>
</body>
</html>