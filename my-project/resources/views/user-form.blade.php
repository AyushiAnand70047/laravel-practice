<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
     <h1>Add new user</h1>
     <form action="addNewUser" method="post">
        @csrf
        <!-- <div>
            <input type="text" placeholder="enter name" name="username"/>
        </div>
        <div>
            <input type="text" placeholder="enter city" name="usercity"/>
        </div>
        <div>
            <input type="text" placeholder="enter email" name="useremail"/>
        </div> -->
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php"/>
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="laravel" value="laravel"/>
            <label for="laravel">Laravel</label>
            <input type="checkbox" name="skill[]" id="sql" value="sql"/>
            <label for="sql">SQL</label>
        </div>
        <div>
            <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <h4>User Age</h4>
            <input type="range" name="age" min="18" max="50">
        </div>
        <div>
            <h4>User City</h4>
            <select name="city">
                <option value="phagwara">Phagwara</option>
                <option value="jalandhar">Jalandhar</option>
                <option value="delhi">Delhi</option>
                <option value="none">None</option>
            </select>
        </div>
        <div>
            <button>Add new user</button>
        </div>
     </form>
</div>
