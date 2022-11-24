<h1>This is customer list<h1>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
</head>

<body>
    <div>
        <div class="shoplogo"> MIDDLEVIEW</div>
        <div class="comment"> UNIVERSITY</div>
    </div>
    <hr>
    <div class="container">
        <div>
            <h1>COURSE DETAILS</h1>
        </div>

        <table border=3px>
            <thead>
             

                <th><u>Course Name</u></th>
                <th><u>Course ID</u></th>
             



            </thead>
            <tbody>
               
@foreach ($course as $cos)

                <tr>
                    <td>{{$cos['coursename']}}</td>
                    <td>{{$cos['cid']}}</td>
                    

                </tr>
              
            </tbody>
            @endforeach
        </table>
        <li><a href="\home"><i class="fa fa-outdent" aria-hidden="true"></i> Back</a></li>
    </div>

</body>

</html>