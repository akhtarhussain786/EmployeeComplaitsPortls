<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>

        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-transform: uppercase;
        }
        /* Profile Picture Styling */
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
            margin: 10px 0;
        }
        .user-profile {
            text-align: center;
            margin: 20px;
        }
        h2{
            margin-top:20px;
        }
        #name {
    font-size: 20px;
    font-weight: bold;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-transform: uppercase;
        }

#name2{
    font-size: 20px;
}

.card{
    margin: 20px;

}

.marquee {
    width: 100%;
    overflow: hidden; /* Hides the overflowing text */
    position: relative;
    background-color: #f0f8f0; /* Light background for visibility */
}

.marquee p {
    display: inline-block;
    white-space: nowrap;
    font-size: 20px;
    font-weight: bold;
    color: #2e8b57;
    animation: marquee 25s linear infinite; /* Scroll effect */
}

@keyframes marquee {
    0% {
        transform: translateX(100%); /* Starts offscreen from the right */
    }
    100% {
        transform: translateX(-100%); /* Ends offscreen to the left */
    }
}


#email{
    margin-left:500px;
}




    </style>
</head>
<body>
    <div class="dashboard">
        
        <!-- Sidebar -->
        <aside class="sidebar">
       
            <div class="logo">
            <div class="user-profile">
            <img src="https://i.pravatar.cc/150?random=2" alt="Random Profile Picture" alt="User Profile" class="profile-pic">
            <p id="name"><?php echo $_SESSION['name']; ?></p>
           



   

  


</body>
                <nav>
               

            </nav>
            </div>
                
                <h2>Dashboard</h2>
            </div>
           
           
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1 id="name2">Welcome, <?php echo $_SESSION['name']; ?>!</h1>
                <p id="email"><?php echo $_SESSION['email']; ?></p>
               
                <button class="btn-logout" onclick="window.location.href='logout.php';">Logout</button>
            </header>

            <!-- Cards Section -->
            <div class="marquee">
  <p>Welcome to LK Company! We're excited to have you here. Enjoy your stay!</p>
</div>


            <section class="cards">
                <div class="card">
                    <h3>REALISE YOU COMPLIANTS</h3>
                    <p>42</p>
                    <button class="btn-logout" onclick="window.location.href='';">Complaints Request</button>
                </div>
                <div class="card">
                    <h3>Pending Tasks</h3>
                    <p>8</p>
                    <button class="btn-logout" onclick="window.location.href='';">Manage Pending Task</button>
                </div>
                <div class="card">
                    <h3>Notifications</h3>
                    <p>5</p>
                    <button class="btn-logout" onclick="window.location.href='';">View Notifications</
                </div>
            </section>

            <!-- Main Section -->
            <p>All Featurs Are Comming Soon.</p>
            <section class="content">
                <h2>All Featurs Are Comming Soon.</h2>
                <p>This is your personalized dashboard where you can manage tasks, view notifications, and update settings.</p>
            </section>
        </main>
    </div>
</body>
</html>
