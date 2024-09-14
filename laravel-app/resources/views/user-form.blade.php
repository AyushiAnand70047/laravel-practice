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
            <h4>User Skill</h4>
            <input type="checkbox" name="skill[]" id="php" value="PHP"/>
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="Laravel" value="Laravel"/>
            <label for="Laravel">Laravel</label>
            <input type="checkbox" name="skill[]" id="sql" value="SQL"/>
            <label for="sql">SQL</label>
        </div>
        <div class="input-wrapper">
            <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="Male"/>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="Female"/>
            <label for="female">Female</label>
        </div>
        <div class="input-wrapper">
            <h4>User City</h4>
            <select name="city">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurugram">Gurugram</option>
            </select>
        </div>
        <div class="input-wrapper">
            <h4>User Age</h4>
            <input type="range" name="age" min="18" max="50">
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