<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="@vite('resources/css/app.css')" rel="stylesheet">
</head>
<body class="font-sans bg-cover bg-no-repeat bg-center h-screen flex justify-center items-center" style="background-image: url('/assets/image/Asset3.jpg')">
    <h2 class="text-center text-white mb-80 mr-20">Tailwind CSS Login Form</h2>
    <form id="loginform" class="w-300 px-20 py-20 bg-opacity-80 bg-white border border-gray-300 rounded shadow-md absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="mb-20">
            <label class="small-label">Username:</label>
            <input type="Username" class="small-input" />
        </div>
        <div class="mb-20">
            <label class="small-label">Password:</label>
            <input type="Password" class="small-input" />
        </div>
        <button type="submit" class="w-full h-40 bg-green-600 hover:bg-green-700 text-white font-bold py-10 px-10 border-none rounded-md cursor-pointer">Login</button>
    </form>
</body>
</html>