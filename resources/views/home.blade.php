<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamago MVC</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="flex items-center justify-center bg-gray-900 w-min p-6">
            <table class=" table text-gray-400 text-sm">
                <thead>
                    <tr>
                        <th class="p-3">Brand</th>
                        <th class="p-3">Model</th>
                        <th class="p-3">Color</th>
                    </tr>
                </thead>
                @foreach($cars as $car)
                <tr class="bg-gray-800">
                    <td class="p-3">{{$car->CarBrand}}</td>
                    <td class="p-3">{{$car->CarModel}}</td>
                    <td class="p-3">{{$car->CarColor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
</body>
</html>