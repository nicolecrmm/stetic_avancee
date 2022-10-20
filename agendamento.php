<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendamento</title>
    <style>

        body{
            padding: 0px;
            margin: 0px;
            background-color:#EDEDED;
        }

        .block_top{
            background-color: #FFFFFF;
            justify-content: center;
            display: flex;
            margin-bottom:100px;
        }

        .align{
            margin-left: auto;
            margin-right: auto;
            justify-content: space-around;
        }

        .block_bk{
            width: 1264px;
            height: 542px;
    
            background: #B87648;
            border-radius: 30px;
        }

        .div_block{
            width: 100%;
            height: 100%;
        }

        .text_align{
            text-align:
             center;
            color: #FFFFFF;
        }

        .column{
            display: flex;
            flex-direction: column;
        }

        .div_block input{
            width: 700px;
            height: 70px;

            border-radius: 20px;
            margin-left: auto;
            margin-right: auto;
            padding-top: -1%;
            border-style: none;
        }

        .div_block select{
            width: 700px;
            height: 70px;

            border-radius: 20px;
            margin-left: auto;
            margin-right: auto;
            border-style: none;
        }

        .block_bk h3{
            margin-top: 15px;
        }

        .conc{
            margin-top: 15px;
            width: 80px;
            height: 30px;
            border-radius: 10px;
            border-style: none;
        }
        .h33{
            color:rgb(184, 118, 72);
            text-align: center;
            font-size: 23px;
        }
    </style>
</head>
<body>
    <div class="block_top">
        <img src="logo.png">
    </div>
    <h3 class="h33">
                Agende seu horário:
            </h3>
    <form action="agend.php" method="POST">
    <div class="block_bk align">
        
    
        <div class="text_align div_block column">
            <br>
            <h3>
                Código do cliente: 
            </h3>
            <select id="id_idcliente" name="id_idcliente">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
             
            <label for="select"><h3>Escolha o procedimento:</h3></label>
            <select id="select" name="fk_procedimento">
                    <option value="null">Escolha a sua opção:</option>
                    <option value="1">Preenchimento Labial</option>
                    <option value="2" >Intradermoterapia</option>
                    <option value="3">Botox </option>
                    <option value="4">Rinomodelação </option>
                    <option value="5">Microagulhamento </option>
                    <option value="proced6">Criolipólise</option>
                  </select>
        
            <h3>
                Selecione a data:
            </h3>
                  <input type="date" name="data_data">
            <h3>
                Define a hora:
            </h3>
        
                <input type="time" name="hora"></form>

            <input type="submit" name="agendar" value="agendar" class="conc align">
        
            
        </div>

                 
              
    </div>

    
</body>
</html>