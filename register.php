<?php
$paises = $ceu = array( "Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Fale conosco</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Inscreva-se</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos obrigatórios</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nome completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >E-mail:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>

                <div class="container">
                    <label for="pais">País:</label><br/>
                    <select name="pais">
                        <option value="">Selecione o pais...</option>
                        <?php foreach ($paises as $key => $value): ?>
                            <option><?php echo $key ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class='container'>
                    <label for='username' >Nome de usuário*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>

                <div class='container' style=''>
                    <label for='password' >Senha*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <?php if (!isset($_GET['versaoCurta'])): ?>
                    <div class='container' style=''>
                        <label for='password2' >Confirmar Senha*:</label><br/>
                        <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                        <input type='password' name='password2' id='password2' maxlength="50" />
                        <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    </div>
                <?php endif ?>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
    </html>
