@extends('pages/users/user-general')

@section('content-users')

<style>
    form {
        width: 500px;
        background: linear-gradient(#0C0037, #FF5064);
        border-radius: 50px;
    }

    form > #hr {
        width: 270px;
        height: 2px;
        align-self: center;
        background: #FF5064;
    }

    form > input {
        width: 50%;
        background-color: transparent;
        border: none;
        margin-top: 20px;
    }

    form > .g-recaptcha {
        margin-top: 20px;
    }

    form > #submit-btn {
        box-shadow: 0px 5px 15px black;
    }
</style>

<body class="bg-blackLDV flex">

<form id="register-form" action="#" method="POST" class="m-auto flex flex-col py-11 px-11">

    <h2 class="text-white font-bold text-xl uppercase text-center">Créer son compte</h2>

    <div id="hr"></div>

    <div class="flex flex-col mt-11">
        <label class="text-white font-bold mb-1">Identifiant</label>
        <input type="text" class="bg-transparent border-t-0 border-l-0 border-r-0 border-b-2">
    </div> 

    <div class="flex flex-col mt-5">
        <label class="text-white font-bold mb-1">UserID Discord (User#0000)</label>
        <input type="text" class="bg-transparent border-t-0 border-l-0 border-r-0 border-b-2">
    </div> 

    <div class="flex flex-col mt-5">
        <label class="text-white font-bold mb-1">Adresse email</label>
        <input type="email" class="bg-transparent border-t-0 border-l-0 border-r-0 border-b-2">
    </div>

    <div class="flex flex-col mt-5">
        <label class="text-white font-bold mb-1">Mot de passe</label>
        <input type="password" class="bg-transparent border-t-0 border-l-0 border-r-0 border-b-2">
    </div>

    <div class="flex flex-col mt-5">
        <label class="text-white font-bold mb-1">Vérification du mot de passe</label>
        <input type="password" class="bg-transparent border-t-0 border-l-0 border-r-0 border-b-2">
    </div>

    <div class="g-recaptcha self-center" data-sitekey="6LcFwUUaAAAAAAw_8HK-xXykAexKsRW18j1vMJtL"></div>

    <button id="submit-btn" class="bg-white w-36 p-2 self-center mt-5 text-pinkLDV uppercase font-bold text-center rounded-3xl" type="submit">Valider</button>

</form>

	
<script src='https://www.google.com/recaptcha/api.js'>
</script>

</body>