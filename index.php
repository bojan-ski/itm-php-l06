<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwindcss - cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />

    <!-- daisyui - cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/daisyui/4.12.23/full.css" integrity="sha512-liVdpj1E7WACFJBjb9MexsvLC33vmuHcrmR+nw42OaRl13zpHWHJofEKTP3M84Ah82zJTBvei6ggHlSv9aLz8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- title -->
    <title>
        ITM - PHP - L06
    </title>
</head>

<body>
    <div class="container mx-auto h-screen flex items-center justify-center">

        <form method="POST" action="check_name.php" class="border border-info w-1/3 p-5">
            <div class="mb-5">
                <label for="userInputtedName" class="label font-bold">
                    Enter name
                </label>
                <input
                    type="text"
                    name="userInputtedName"
                    id="userInputtedName"
                    placeholder="Enter name"
                    class="input input-bordered w-full"
                    required />
            </div>

            <button type="submit" class="btn btn-outline btn-info">
                Submit name
            </button>
        </form>

    </div>
</body>

</html>