<html  >
    <body>
        <h2> hello, 
        @foreach ( $user as $student )
            {{$student->name}}
        @endforeach
    </h2>

    <form>
        <label>Name: </label>
        <input type="text" name="name" placeholder="Enter Name">
        
        <input type="submit" value="Submit">
    </form>
    </body>
</html>
