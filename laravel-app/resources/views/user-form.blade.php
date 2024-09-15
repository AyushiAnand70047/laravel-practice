<div>
    <h2>Add new user</h2>
    <!-- {{print_r($errors)}} -->
    <!-- @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div style="color: red">
        {{$error}}
    </div>
    @endforeach
    @endif -->
    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name: " name="username" value="{{old("username")}}" class="{{$errors->first('username')?'input-error':''}}"/>
            <span style="color: red">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email: " name="useremail" value="{{old("useremail")}}"/>
            <span style="color: red">@error('useremail'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City: " name="usercity" value="{{old("usercity")}}"/>
            <span style="color: red">@error('usercity'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h4>User Skill</h4>
            <input type="checkbox" name="skill[]" id="php" value="PHP"/>
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="Laravel" value="Laravel"/>
            <label for="Laravel">Laravel</label>
            <input type="checkbox" name="skill[]" id="sql" value="SQL"/>
            <label for="sql">SQL</label>
            <span style="color: red">@error('skill'){{$message}}@enderror</span>
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
        border: gray 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: green;
    }
    .input-wrapper{
        margin: 10px;
    }
    button{
        background-color: white;
        cursor: pointer;
    }
    .input-error{
        border: 2px solid red;
        color: red;
    }
</style>