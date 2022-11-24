
    

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Details</title>
    
</head>

<body>
    <div>
        <div class="shoplogo"> MIDDLEVIEW</div>
        <div class="comment"> UNIVERSITY</div>
    </div>
    <hr>
    <div class="st_reg fix">
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