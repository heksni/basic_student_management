<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="h-full flex-col bg-gray-400">
        <div>

            <x-nav-bar></x-nav-bar>
        </div>
        <div>

            <dh-component>
                        <div class="flex flex-no-wrap">

                            <x-side-bar></x-side-bar>
                                            
                            <div class="container mx-auto py-10  md:w-4/5 w-11/12 px-6 ">
                                <div class="w-full h-full rounded border-dashed border-2 " style="background-color: white; padding-bottom:30px;">
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
            </dh-component>
        </div>
    </div>
</body>
</html>