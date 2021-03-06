<!--Style for indexTwo Page-->
<h1>Log out</h1>
<form action="logout.php" method="post" name="Logout_Form" ">
<button value="Logout" class="buttonLogout" type="submit">Log out</button>
</form>

<style>
    body
    {
        margin: 0;
        padding: 0;
        font-family: 'Dosis', sans-serif;
    }

    input[type=text], select, textarea{
        width: 100%;
        padding-left: 10rem;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #d6a85f;
        color: black;
        padding: 10px 18px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #d6a85f;
        width: 6rem;

    }

    .container {
        border-radius: 5px;
        background-color: #222222;
        padding: 20px;
        margin-left: 30rem;
        margin-right: 30rem;
        margin-top: 2rem;
        color: #d6a85f;
    }

    h2{
        text-align: center;
    }

    .container input{
        border-radius: 3px;
    }

    .cAcc{
        color: #d6a85f;
        background-color: black;
        border-color: #d6a85f;
        border-radius: 10px;
        height: 35px;

    }


    .welcometoM img{
        width: 100%;
        height: 400px;
    }

    .nPlain{
        background-color: black;
        height: 80px;
        width: 100%;
        text-align: center;
    }

    .loginDiv{
        text-align: center;
    }

    .loginDiv img{
        width: 100%;
        height: 400px;
    }


</style>