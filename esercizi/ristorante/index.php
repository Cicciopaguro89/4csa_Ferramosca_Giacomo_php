<!DOCTYPE html>
<style> body{
            background-color: #60c8e7;
            margin: 0px;
            font-family: Verdana, Arial, Helvetica, sans-serif; 
            width: 21cm;
        }
     
        #cornice {
            background-color: #ffffff;
            margin: 25px;
            padding: 10px;
            border: 2px solid #000000;
            color: #000000;
        }

        .titolo {
            width: 70%;
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 1px;
            border-left-width: 0px;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: double;
            border-left-style: none;
            border-top-color: #FFFFFF;
            border-right-color: #FFFFFF;
            border-bottom-color: #000000;
            border-left-color: #FFFFFF;
            margin: 20px 0px 10px;
            padding: 0px;
        }

        h1 {
            padding: 0px;
            font-size: 14pt;
            float: right;
        }

        h2 {
            padding: 0px;
            margin: 0px;
            font-size: 1em;
        }

        .content {
            font-size: 8pt;
        }
        li {
            padding: 0px;
            font-size: 8pt;
        }
        p {
            padding: 0px;
            font-size: 8pt;;
        }
    </style>
<h1>Menù ristorante da Gigi</h1><br><br><br>
<table>
    <td><tr> </tr></td>

<?php
$taglio=["tagliolini al ragu ","10$"];
$ling=["linguine al pesto ","11$"];
$spago=["spaghetti alle vongole ","15$"];
$canne=["cannelloni alla carbonara ","12$"];
$menu=[$taglio,$ling,$spago,$canne];

foreach($menu as $piatto)
{
    echo "$piatto[0] ";
    echo "$piatto[1] <br>";
}
?>
</table>