
<?php

include 'records.php';

$Records_controller = new Records_controller();

?>

<div class="container">
    <div class="jumbotron">
        <h1 style="display: inline-block;">User Records</h1>
    </div>

    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td><input type="text" class="form-control" placeholder="First Name" id="first_name"></td>
            <td><input type="text" class="form-control" placeholder="Last Name" id="last_name"></td>
            <td><input type="email" class="form-control" placeholder="Email" id="email"></td>
            <td><input type="text" class="form-control" placeholder="Mobile" id="mobile"></td>

            <td style="cursor:pointer;" id="add_record">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve" width='36' height='36'>

                    <g>
                        <g>
                            <path d="M392.533,0h-307.2C38.228,0.056,0.056,38.228,0,85.333v307.2c0.056,47.105,38.228,85.277,85.333,85.333h307.2
                                c47.105-0.056,85.277-38.228,85.333-85.333v-307.2C477.81,38.228,439.638,0.056,392.533,0z M324.267,256H256v68.267
                                c0,9.426-7.641,17.067-17.067,17.067s-17.067-7.641-17.067-17.067V256H153.6c-9.426,0-17.067-7.641-17.067-17.067
                                s7.641-17.067,17.067-17.067h68.267V153.6c0-9.426,7.641-17.067,17.067-17.067S256,144.174,256,153.6v68.267h68.267
                                c9.426,0,17.067,7.641,17.067,17.067S333.692,256,324.267,256z"/>
                        </g>
                    </g>
                </svg>
            </td>
        </tr>

<?php

$records = $Records_controller->get_records();

foreach($records as $record)
{
    if($record[0] != '')
    {
        echo 
        "<tr>
            <th scope='row'>$record[0]</th>
            <td>$record[1]</td>
            <td>$record[2]</td>
            <td>$record[3]</td>
            <td>$record[4]</td>
            <td><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
            width='18' height='18' viewBox='0 0 528.899 528.899' style='enable-background:new 0 0 528.899 528.899;'
            xml:space='preserve'>
        <g>
            <path d='M328.883,89.125l107.59,107.589l-272.34,272.34L56.604,361.465L328.883,89.125z M518.113,63.177l-47.981-47.981
                c-18.543-18.543-48.653-18.543-67.259,0l-45.961,45.961l107.59,107.59l53.611-53.611
                C532.495,100.753,532.495,77.559,518.113,63.177z M0.3,512.69c-1.958,8.812,5.998,16.708,14.811,14.565l119.891-29.069
                L27.473,390.597L0.3,512.69z'/>
        </g>
        </svg></td>
        </tr>";  
    }
}
?>

        </tbody>
    </table>
</div>

<script src="index.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">