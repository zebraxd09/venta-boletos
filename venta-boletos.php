<!DOCTYPE html>
<html lang="en">
<head>
    <title>BOLETOS.mx</title>
    <link rel="icon" href=".\boletos.ico" type="image/x-icon">
</head>
<body align="center" style="background-color: #d7d7d2;">
    <?php
        if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['date']) && !empty($_POST['tickets']) && !empty($_POST['artist']) && !empty($_POST['place']) && !empty($_POST['zone']))
        {
            echo '<h2 align="center">Tus boletos uwu</h2>';
            $name=($_POST['name']);
            $surname=($_POST['surname']);
            $date=($_POST['date']);
            $tickets=($_POST['tickets']);
            $artist=($_POST['artist']);
            $place=($_POST['place']);
            $zone=($_POST['zone']);
            $val_tick = $tickets;
            if($tickets>15)
            {
                $val_tick = $tickets;
                $tickets=15;
            }        
            for($i=1; $i<=$tickets; $i++)
            {
                echo '<table align="center" border="1" style="border-collapse:collapse; " cellpadding="30px">';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th colspan="4"><strong>';
                                echo "Boletos para ".$artist;
                            echo '</strong></th>';
                        echo '</tr>';
                    echo '</thead>';
                    echo '<tbody align="center">';
                        echo '<tr>';
                            echo '<td>'.$name.'</td>';
                            echo '<td>'.$surname.'</td>';
                            echo '<td>'."Fecha: ".$date.'</td>';
                            echo '<td rowspan="3">';
                                switch($artist) 
                                {
                                    case 'Taylor Swift':
                                        echo '<img src=".\t-swift.jpg" alt="t-swift">';
                                        break;
                                    case 'Luis Miguel':
                                        echo '<img src=".\luismi.jpg" alt="luismi">';
                                        break;
                                    case 'Arctic Monkeys':
                                        echo '<img src=".\arc-monk.jpg" alt="arc-monk">';
                                        break;
                                    case 'Caifanes':
                                        echo '<img src=".\caifanes.jpg" alt="caifanes">';
                                        break;
                                    case 'Rosalía':
                                        echo '<img src=".\rosalia.jpg" alt="rosalia">';
                                        break;
                                }
                            echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>'.$place.'</td>';
                            echo '<td>'.$zone.'</td>';
                            echo '<td rowspan="2">';
                                if(isset($_POST["extras"])) 
                                {
                                    echo "<ul>";
                                    echo "Extras: <br><br>";
                                    if(in_array("f-pack", $_POST["extras"])) 
                                    {
                                        echo "<li>"."Paquete con comida"."</li>"."<br>";
                                    }
                                    if(in_array("vip-t", $_POST["extras"])) 
                                    {
                                        echo "<li>"."Pase VIP"."</li>"."<br>";
                                    }
                                    if(in_array("parking", $_POST["extras"])) 
                                    {
                                        echo "<li>"."Estacionamiento"."</li>";
                                    }
                                    echo "</ul>";
                                } else 
                                {
                                    echo "Sin extras";
                                }
                            echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>';
                                switch($place) 
                                {
                                    case 'Auditorio':
                                        echo '<img src=".\aud-nacional.jpg" alt="auditorio">';
                                        break;
                                    case 'Palacio de los Deportes':
                                        echo '<img src=".\p-deportes.jpg" alt="palacio-de-los-deportes">';
                                        break;
                                    case 'Foro Sol':
                                        echo '<img src=".\foro-sol.jpg" alt="foro-sol">';
                                        break;
                                    case 'Teatro Metropolitan':
                                        echo '<img src=".\t-metropolitan.jpg" alt="teatro-metropolitan">';
                                        break;
                                }
                            echo '</td>';
                            echo '<td>';
                                switch($zone) 
                                {
                                    case 'Asientos reservados':
                                        echo '<img src=".\rvd-seat.jpg" alt="asientos-reservados">';
                                        break;
                                    case 'Gradas':
                                        echo '<img src=".\gradas.jpg" alt="gradas">';
                                        break;
                                    case 'Zona VIP':
                                        echo '<img src=".\vip-seat.jpg" alt="zona-vip">';
                                        break;
                                    case 'Palcos':
                                        echo '<img src=".\palcos.jpg" alt="palcos">';
                                        break;
                                }
                            echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td colspan="4">';
                                switch($artist) 
                                {
                                    case 'Taylor Swift':
                                        echo '<i>"The Eras Tour 2023"</i>';
                                        break;
                                    case 'Luis Miguel':
                                        echo '<i>"Luis Miguel Tour 2023"</i>';
                                        break;
                                    case 'Arctic Monkeys':
                                        echo '<i>"North American Tour 2023"</i>';
                                        break;
                                    case 'Caifanes':
                                        echo '<i>"Caifanes Tour ´23-24"</i>';
                                        break;
                                    case 'Rosalía':
                                        echo '<i>"Motomami Festival Tour 2023"</i>';                                    
                                        break;
                                }
                            echo '</td>';
                        echo '</tr>';
                    echo '</tbody>';
                echo '</table>';
                echo '<br><br>';
            }
            if($val_tick>15)
            {
                echo 'Se solicitaron <strong>demasiados boletos</strong>, se imprimieron 15 boletos. Faltaron '.$val_tick-15 .' de los '.$val_tick.' solicitados';
                echo '<br>';
                echo '<br>';
            }    
        }
        else
        {
            echo '<h2 align="left">ERROR</h2>';
            echo'<ul align="left">Falta por especificar:';
            echo "<br>";
            if($_POST['name']==false)
            {
                echo "<li>"."Nombre"."</li>";
            }
            if($_POST['surname']==false)
            {
                echo "<li>"."Apellido"."</li>";
            }
            if($_POST['date']==false)
            {
                echo "<li>"."Fecha"."</li>";
            }
            if($_POST['tickets']==false)
            {
                echo "<li>"."Numero de boletos"."</li>";
            }
            if($_POST['place']==false)
            {
                echo "<li>"."Lugar"."</li>"."<br>";
            }
        }
    ?>
</body>

</html>