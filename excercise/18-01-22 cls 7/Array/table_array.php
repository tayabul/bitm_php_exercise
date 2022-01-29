<?php
$tayab=[
    'name'=> 'Saiful islam',
    'fathers_name'=> 'Khamal Uddin',
    'mothers_name'=> 'Roji Akther',
    'email' => 'saiful@gmail.com',
    'mobile'=> '094283237423',
    'address'=> 'Dhaka',
];

?>

<table border= 1>
    <tr>
        <th>Name</th>
        <th>Fathers Name</th>
        <th>Mothers Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Mobile</th>
    </tr>
    <tr>
        <td><?php echo $tayab['name'] ?> </td>
        <td><?php echo $tayab['fathers_name'] ?> </td>
        <td><?php echo $tayab['mothers_name'] ?> </td>
        <td><?php echo $tayab['email'] ?> </td>
        <td><?php echo $tayab['address'] ?> </td>
        <td><?php echo $tayab['mobile'] ?> </td>
    </tr>
</table>
</table>