<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create new teams - Management App For Boats</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center gap-20 h-screen w-screen bg-stone-800 text-teal-400">
    <main class="flex items-center">
        <form method="POST" action="{{ route('create-new-team-with-owner') }}" class="min-h-96 flex item-center gap-4 box-shadow-md shadow-stone-200 rounded-xl flex-col justify-center w-80">
            @csrf

            <h1 class="text-2xl text-center">Welcome</h1>

            <label for="user_id">This will be the new team owner</label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

            <input type="name" name="name" placeholder="LG Boats" class="w-60 mx-auto px-2 py-1 rounded-md" />

            <button class="bg-stone-600 w-60 mx-auto px-4 py-1 rounded-md">Create new team</button>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </main>
</body>

</html>
