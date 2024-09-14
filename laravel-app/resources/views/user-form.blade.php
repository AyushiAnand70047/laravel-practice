<div>
    <h2>Add new user</h2>
    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name: " name="username"/>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email: " name="useremail"/>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City: " name="usercity"/>
        </div>
        <div class="input-wrapper">
            <button>Add new user</button>
        </div>
    </form>
</div>

<style>
    input,button{
        border: orchid 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: crimson;
    }
    .input-wrapper{
        margin: 10px;
    }
    button{
        background-color: white;
        cursor: pointer;
    }
</style>