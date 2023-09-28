<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../dist/output.css">
    <style>
        #first
        {
            padding:50px;
        }
    </style>
</head>
<body class="text-gray-600">
    <?php
    $email= $name = $password = $age = $dob = "";
    $emailerror = $nameerror = $passworderror = $ageerror = $doberror = "";
    
    function my_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(($_SERVER["REQUEST_METHOD"] == "POST"))
    {
        if(!empty($_REQUEST["name"]))
        {
            $name=my_input($_REQUEST["name"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
            {
                $nameerror="Invalid Format";
            }
        }
        else
        {
            $nameerror="Please Enter Your Name";
        }

        if(!empty($_REQUEST["email"]))
        {
            $email=my_input($_REQUEST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailerror="Invalid Format";
            }
        }
        else
        {
            $emailerror="Please Enter Email Address";
        }

        if(!empty($_REQUEST["password"]))
        {
            $password=my_input($_REQUEST["password"]);
            settype($password,"string");
            $length=strlen($password);            
            $uppercase=preg_match('@[A-Z]@',$password);
            $lowercase=preg_match('@[A-Z]@',$password);
            $number=preg_match('@[0-9]@',$password);
            $specialcase=preg_match('@[^\w]@',$password);
            if($uppercase||$lowercase||$number||$specialcase||$length<8)
            {
                $passworderror="Weak Password, must contain speical character number uppercase and lowercase";
            }            
        }
        else
        {
            $passworderror="Please Enter Password";
        }
        if(empty($_REQUEST["age"]))
        {
            $ageerror="Please Enter Age";
        }
        else
        {
            $age=my_input($_REQUEST["age"]);
        }


        if(empty($_REQUEST["dob"]))
        {
            $doberror="Please Enter DOB";
        }
        else
        {
            $dob=my_input($_REQUEST["dob"]);
        }        
    }
    ?>
    <div class="h-screen flex w-full">
        <div class="flex items-center justify-center border flex-1">
            <div class="space-y-6 w-full px-28" id="first">
                <div class="relative" >
                    <a href="#" class="absolute inset-0" ></a>
                    <svg class="w-12 h-12 text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="currentColor"><path d="M7.5 2.5c-1.026 0-1.908.277-2.6.87-.688.59-1.137 1.447-1.387 2.516a.5.5 0 00.897.4c.316-.452.632-.723.936-.863.294-.135.611-.162.975-.065.366.098.65.386 1.095.87l.015.016c.336.365.745.81 1.305 1.156.582.359 1.305.6 2.264.6 1.026 0 1.908-.277 2.6-.87.688-.59 1.138-1.447 1.387-2.516a.5.5 0 00-.897-.4c-.316.452-.632.723-.936.863-.294.135-.611.162-.975.065-.366-.098-.65-.386-1.095-.87l-.015-.016c-.336-.365-.745-.81-1.305-1.156-.582-.359-1.305-.6-2.264-.6zM4 7c-1.026 0-1.908.277-2.6.87C.712 8.46.263 9.317.013 10.386a.5.5 0 00.897.4c.316-.452.632-.723.936-.863.294-.135.611-.162.975-.065.366.098.65.386 1.095.87l.015.016c.336.365.745.81 1.305 1.156.582.359 1.305.6 2.264.6 1.026 0 1.908-.277 2.6-.87.688-.59 1.138-1.447 1.387-2.516a.5.5 0 00-.897-.4c-.316.452-.632.723-.936.863-.294.135-.611.162-.975.065-.366-.098-.65-.386-1.095-.87l-.015-.016c-.335-.365-.745-.81-1.305-1.156C5.682 7.24 4.959 7 4 7z" fill="currentColor"></path></svg>
                </div>
                <div>
                    <h1>Sign up to your account</h1>
                    <p>Not a member? <a href="http://">Start a 14 day free trial</a></p>
                </div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-5 max-w-full">
                    <div class="space-y-1">
                        <label for="name">Name</label>
                        <input type="test" name="name" class="border border-gray-200 w-full rounded-md py-2 px-4"
                        value="<?php echo $name; ?>" placeholder="Enter Your Name">
                        <span class=" text-red-600">*
                            <?php echo $nameerror; ?>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <label for="">Email Address</label>
                        <input type="email" name="email" class="border border-gray-200 w-full rounded-md py-2 px-4"
                            value="<?php echo $email; ?>" placeholder="Enter Your Email Address">
                        <span class=" text-red-600">*
                            <?php echo $emailerror; ?>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="border border-gray-200 w-full rounded-md py-2 px-4" value=""
                        placeholder="Enter Password">
                        <span class=" max-w-sm text-red-600">*
                        <?php echo $passworderror; ?>
                        </span>
                    </div>
                    <div class="">
                        <label for="age">Age</label>
                        <Select class=" w-full border rounded" name="age" value="<?php echo $age; ?>">
                            <option value="Select Age" disabled selected>Select Age</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                        </Select>
                        <span class=" text-red-600">*
                            <?php echo $ageerror; ?>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <label for="dob">DOB</label>
                        <input type="date" name="dob" id="dob" class=" w-full border rounded" value="<?php echo $dob; ?>">
                        <span class=" text-red-600">*
                            <?php echo $doberror; ?>
                        </span>
                    </div>
                    <div class="flex justify-between gap-3">
                        <div>
                            <input type="checkbox" name="rem" id="rem">
                            <label for="rem">Remember me</label>                            
                        </div>
                        <a href="http://">Forgot password?</a>
                    </div>
                    <input type="submit" value="Submit" name="submit"
                        class="w-full text-center py-2 px-3 bg-blue-500 text-white rounded-md">
                
                    <div
                        class="text-center relative after:absolute after:content-[''] after:h-1 after:inset-x-0 after:border-t after:border-gray-300 after:top-1/2">
                        <span class="bg-white px-3 inline-block relative z-20">Or continue with</span>
                    </div>
                
                    <div class="flex justify-between gap-3">
                        <a href="#" class="flex-1 bg-black text-white rounded-md text-center py-2 px-4">facebook</a>
                        <a href="#" class="flex-1 bg-black text-white rounded-md text-center py-2 px-4">Github</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="border flex-1" id="first">            
            <?php
            if(($emailerror && $nameerror && $passworderror && $ageerror && $doberror)==false)
            {
                echo '<h1 style="font-size:30px;">' . $name . '</h1>';
                echo "<br>";
                echo '<b>Email:</b> ' . $email;
                echo "<br>";            
                echo '<b>Age:</b> ' . $age;
                echo "<br>";
                echo '<b>DOB:</b> ' . $dob;
            }         
            
            ?>
        </div>
    </div>
    
</body>
</html>