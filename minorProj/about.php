<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- ===== CSS ===== -->
      <link rel="stylesheet" href="assests/style.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ChatSphere Forum Community</title>
</head>

<body>
    <?php include "partials/_header.php";
          include "partials/_dbconnect.php";?>
    <div class="abouheader">
        About Us
    </div>
    <main class="abmain">
        
        <section class="about-section">
            <div class="col-10 col-sm-8 col-lg-6" id="abimage">
                <img src="assests/images/bg-header-mobile.png" class="d-block mx-lg-auto img-fluid " alt="mobile demo"  loading="lazy">
              </div>
            <h2>Our Story</h2>
            <p>We are a passionate team dedicated to creating meaningful web experiences. Our journey began with a vision to build a platform where people can connect, learn, and share their ideas. We believe in the power of the web to make the world a better place.</p>
        </section>
       
    </main>
    
    <div class="container">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-check2-circle"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                        <path
                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                    </svg>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Easy to use</h3>
                    <p>Chat effortlessly on our forum – it's as simple as typing and clicking!"</p>
                    </a>
                </div>
            </div><br>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-mortarboard"
                        viewBox="0 0 16 16">
                        <path
                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z" />
                        <path
                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
                    </svg>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Exclusive Members </h3>
                    <p>Join a community of elite individuals for a unique experience</p>
                    </a>
                </div>
            </div><br>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor"
                        class="bi bi-arrow-through-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.854 15.854A.5.5 0 0 1 2 15.5V14H.5a.5.5 0 0 1-.354-.854l1.5-1.5A.5.5 0 0 1 2 11.5h1.793l.53-.53c-.771-.802-1.328-1.58-1.704-2.32-.798-1.575-.775-2.996-.213-4.092C3.426 2.565 6.18 1.809 8 3.233c1.25-.98 2.944-.928 4.212-.152L13.292 2 12.147.854A.5.5 0 0 1 12.5 0h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.854.354L14 2.707l-1.006 1.006c.236.248.44.531.6.845.562 1.096.585 2.517-.213 4.092-.793 1.563-2.395 3.288-5.105 5.08L8 13.912l-.276-.182a21.86 21.86 0 0 1-2.685-2.062l-.539.54V14a.5.5 0 0 1-.146.354l-1.5 1.5Zm2.893-4.894A20.419 20.419 0 0 0 8 12.71c2.456-1.666 3.827-3.207 4.489-4.512.679-1.34.607-2.42.215-3.185-.817-1.595-3.087-2.054-4.346-.761L8 4.62l-.358-.368c-1.259-1.293-3.53-.834-4.346.761-.392.766-.464 1.845.215 3.185.323.636.815 1.33 1.519 2.065l1.866-1.867a.5.5 0 1 1 .708.708L5.747 10.96Z" />
                    </svg>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Reliability You Can Count On</h3>
                    <p>Rest easy knowing our platform is tried, tested, and ready to work</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <section id="footer" class="gradient-background">

        <h2 class="core">
            <centre>OUR CORE VALUES</centre>
        </h2>
        <hr>
        <br>
        <div class="row">
            <div style="width: 100%; margin:30px;">
                <div style="width: 50%; height: auto; float: left;">
                    <div class="flex--item"><svg aria-hidden="true" class="svg-spot spotWave fc-orange-500" width="48"
                            height="48" viewBox="0 0 48 48">
                            <path
                                d="M37.96 1.57c.67-.34 1.5-.07 1.84.6l5.42 10.75a1.37 1.37 0 1 1-2.46 1.23L37.35 3.41c-.34-.67-.07-1.5.6-1.84Zm-3.21 5.9c.69-.31 1.5 0 1.81.69l2.32 5.15a1.37 1.37 0 0 1-2.5 1.13L34.06 9.3c-.31-.7 0-1.5.69-1.82ZM6.87 35.3a1.37 1.37 0 0 1 1.94-.06l4.64 4.39a1.37 1.37 0 1 1-1.89 2l-4.64-4.39a1.37 1.37 0 0 1-.05-1.94Zm-5.21 2.38a1.37 1.37 0 0 1 1.94-.06l8.34 7.82a1.37 1.37 0 1 1-1.88 2l-8.34-7.81a1.37 1.37 0 0 1-.06-1.95Zm14.72-.75c3.22 4.1 7.62 9.71 13.93 9.71 1.84 0 3.74-.5 5.65-1.47 5.71-2.92 6.97-6.96 8.55-12.07l.28-.9c1.46-4.67 2.44-8.4 2.7-9.44.56-1.8-.53-3.64-2.43-4.16a3.8 3.8 0 0 0-2.7.27 3.33 3.33 0 0 0-1.7 1.97l-1.82 6.27a.28.28 0 0 1-.25.2c-.13-.04-.23-.07-.27-.17L28.18 4.31c-.9-1.52-2.62-2.05-4.05-1.32-1.52.78-1.85 2.05-1 3.9.87 1.87 5.02 13.3 5.71 15.3.06.16 0 .28-.12.35-.18.07-.3 0-.37-.1L17.9 5.56a2.9 2.9 0 0 0-3.83-1.08c-.67.34-1.13.9-1.32 1.56a2.6 2.6 0 0 0 .3 2.02l9.7 16.55c.07.12.03.26-.09.34-.19.1-.28.04-.37-.06l-9.9-12.16c-.55-.64-1.45-1.4-2.65-1.4-.48 0-.95.12-1.42.35-.59.3-.97.76-1.1 1.33-.18.71.06 1.55.64 2.3.81 1.06 8.66 11.99 10.22 14.17l.05.06c.07.1.05.25-.05.33a.3.3 0 0 1-.36.01l-9.66-7.57a4.05 4.05 0 0 0-2.4-.94c-.43 0-.84.1-1.23.3-.35.17-.62.58-.73 1.08-.11.54-.02 1.09.25 1.56.57.97 2.47 2.68 4.49 4.49 2.24 2 4.78 4.28 6.61 6.46.39.46.8.98 1.34 1.67Z"
                                opacity=".2"></path>
                            <path
                                d="m11.76 34.62.49.58 2.06 2.56.62.74c4.55 5.47 7.93 7.85 12.87 7.85 2 0 4.05-.53 6.1-1.58 4.66-2.38 6.58-5.1 8.47-10.81l.58-1.86.43-1.4c1.05-3.4 1.86-6.22 2.57-8.98a4.3 4.3 0 0 0-3.14-5.37l-.21-.06a4.6 4.6 0 0 0-5.41 2.96l-1.27 4.39L26.58 2.6l-.05-.1C25.36.55 23.08-.18 21.16.8c-1.97 1-2.48 2.79-1.55 4.99l.15.32c.4.9 1.56 3.97 2.75 7.18l.53 1.44-6.81-11C15.18 1.97 13 1.5 11.2 2.38l-.18.08c-1.77.95-2.48 2.92-1.36 4.83l4.89 8.33-3.91-4.8A4.46 4.46 0 0 0 7.2 9.04c-3.07 0-4.47 3.05-2.78 5.45l1.7 2.33 3.51 4.86 2.14 2.97-5.63-4.41a4.9 4.9 0 0 0-3.02-1.16 2.91 2.91 0 0 0-2.57 4.44l.11.18c.5.77 1.38 1.66 3.25 3.37l3.5 3.16.7.65a45.66 45.66 0 0 1 3.64 3.74Zm4.1 1.88-1.89-2.35-.68-.82a35.6 35.6 0 0 0-1.92-2.1l-.59-.57c-.5-.5-1.04-1.01-1.64-1.57l-1.89-1.7-1.74-1.58c-1.99-1.8-2.87-2.7-3.22-3.3-.41-.7.01-1.43.84-1.43.58 0 1.2.28 1.78.73l9.67 7.57c.55.44 1.31.35 1.75-.17.37-.46.4-1.13.02-1.62L7.1 14.72l-.96-1.3c-.88-1.15-.34-2.38 1.08-2.38.68 0 1.33.39 1.89 1.05L19 24.24c.43.51 1.12.58 1.64.28.57-.34.82-1.07.45-1.7l-9.7-16.55c-.53-.9-.23-1.67.67-2.1.94-.45 1.96-.23 2.45.61L25 21.68c.8 1.3 2.77.33 2.28-1.1l-.57-1.64a378.22 378.22 0 0 0-5.17-13.76c-.64-1.39-.47-2.08.54-2.6l.15-.06c.87-.36 1.87-.04 2.5.86l.06.1L34.9 26.26c.47 1.06 2.07.97 2.4-.16l1.81-6.27c.38-1.2 1.84-1.92 3.18-1.55 1.37.37 2.13 1.66 1.74 2.9l-.29 1.1c-.58 2.23-1.24 4.53-2.05 7.17l-.96 3.1-.25.76C38.74 38.58 37.1 40.9 33 43a11.4 11.4 0 0 1-5.2 1.36c-4.35 0-7.41-2.29-11.93-7.85Z">
                            </path>
                        </svg>
                        <h3 class="p-ff-roboto-slab-bold fs-title fc-black-700 mt24 mb12 mnh64">Be flexible and
                            inclusive</h3>

                        <p class="fs-body3 mb32"> We do our best work when a diverse group of people collaborate in an
                            environment of respect and trust. Create space for different voices to be heard, and allow
                            flexibility in how people work. </p>
                    </div>

                    <div class="flex--item"><svg aria-hidden="true" class="svg-spot spotCompass fc-orange-500"
                            width="48" height="48" viewBox="0 0 48 48">
                            <path opacity=".2" d="M21 26.5V38l10-7V19.5l-10 7Z"></path>
                            <path
                                d="M23 15.12a1 1 0 1 0 2 0v-3a1 1 0 1 0-2 0v3ZM12.97 28a1 1 0 1 0 0-2H9.98a1 1 0 1 0 0 2h3ZM38 28a1 1 0 1 0 0-2h-2.99a1 1 0 0 0 0 2H38ZM23.94 43a1 1 0 0 1-1-1v-3a1 1 0 1 1 2 0v3a1 1 0 0 1-1 1Zm9.3-6.35a1 1 0 0 0 1.41-1.41l-.7-.7a1 1 0 1 0-1.42 1.4l.71.71ZM15.3 19.7l-.71-.7A1 1 0 0 1 16 17.59l.7.7a1 1 0 0 1-1.4 1.42Zm-1.95 16.54a1 1 0 0 0 1.41 1.41l.7-.7a1 1 0 1 0-1.4-1.42l-.71.71ZM32.3 19.41a1 1 0 0 1 0-1.41l.7-.7a1 1 0 1 1 1.41 1.4l-.7.71a1 1 0 0 1-1.42 0ZM24 29a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm6-11a1 1 0 0 0-1.6-.8l-10 7.5a1 1 0 0 0-.4.8V36a1 1 0 0 0 1.55.84l10-6.5a1 1 0 0 0 .45-.84V18ZM20 34.16V26l8-6v8.96l-8 5.2Zm6.48-26.12A3.96 3.96 0 0 0 24 1a3.95 3.95 0 0 0-2.48 7.04A19.05 19.05 0 0 0 5 26.94C5 37.47 13.5 46 24 46s19-8.53 19-19.06c0-9.69-7.2-17.68-16.52-18.9Zm-.53-3.08a1.95 1.95 0 1 1-3.9 0 1.95 1.95 0 1 1 3.9 0ZM24 44c-9.38 0-17-7.63-17-17.06S14.62 9.87 24 9.87c9.38 0 17 7.64 17 17.07S33.38 44 24 44Z">
                            </path>
                        </svg>
                        <h3 class="p-ff-roboto-slab-bold fs-title fc-black-700 mt24 mb12 mnh64">Be transparent</h3>
                        <p class="fs-body3 mb32"> Communicate openly and honestly, both inside and outside the company.
                            Encourage transparency from others by being empathetic, reliable, and acting with integrity.
                        </p>
                    </div>

                </div>
                    <div class="flex--item"><svg aria-hidden="true" class="svg-spot spotPeople fc-orange-500" width="48"
                            height="48" viewBox="0 0 48 48">
                            <path
                                d="M13.5 28a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM7 30a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v5h11v-5a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H33v5a1 1 0 0 1-1 1H20a1 1 0 0 1-1-1v-5H8a1 1 0 0 1-1-1V30Zm25-6.5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 0 0-9 0ZM24.5 34a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Z"
                                opacity=".2"></path>
                            <path
                                d="M16.4 26.08A6 6 0 1 0 7.53 26C5.64 26.06 4 27.52 4 29.45V40a1 1 0 0 0 1 1h9a1 1 0 1 0 0-2h-4v-7a1 1 0 1 0-2 0v7H6v-9.55c0-.73.67-1.45 1.64-1.45H16a1 1 0 0 0 .4-1.92ZM12 18a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm16.47 14a6 6 0 1 0-8.94 0A3.6 3.6 0 0 0 16 35.5V46a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V35.5c0-1.94-1.64-3.42-3.53-3.5ZM20 28a4 4 0 1 1 8 0 4 4 0 0 1-8 0Zm-.3 6h8.6c1 0 1.7.75 1.7 1.5V45h-2v-7a1 1 0 1 0-2 0v7h-4v-7a1 1 0 1 0-2 0v7h-2v-9.5c0-.75.7-1.5 1.7-1.5ZM42 22c0 1.54-.58 2.94-1.53 4A3.5 3.5 0 0 1 44 29.45V40a1 1 0 0 1-1 1h-9a1 1 0 1 1 0-2h4v-7a1 1 0 1 1 2 0v7h2v-9.55A1.5 1.5 0 0 0 40.48 28H32a1 1 0 0 1-.4-1.92A6 6 0 1 1 42 22Zm-2 0a4 4 0 1 0-8 0 4 4 0 0 0 8 0Z">
                            </path>
                            <g opacity=".35">
                                <path
                                    d="M17 10a1 1 0 011-1h12a1 1 0 110 2H18a1 1 0 01-1-1Zm1-5a1 1 0 100 2h12a1 1 0 100-2H18ZM14 1a1 1 0 00-1 1v12a1 1 0 001 1h5.09l4.2 4.2a1 1 0 001.46-.04l3.7-4.16H34a1 1 0 001-1V2a1 1 0 00-1-1H14Zm1 12V3h18v10h-5a1 1 0 00-.75.34l-3.3 3.7-3.74-3.75a1 1 0 00-.71-.29H15Z">
                                </path>
                            </g>
                        </svg>
                        <h3 class="p-ff-roboto-slab-bold fs-title fc-black-700 mt24 mb12 mnh64">Keep community at our
                            center</h3>
                        <p class="fs-body3 mb32"> Community is at the heart of everything we do. Nurture healthy
                            communities where everyone is encouraged to learn and give back. </p>
                    </div>

                    <br>
                    <div class="flex--item"><svg aria-hidden="true" class="svg-spot spotMetrics fc-orange-500"
                            width="48" height="48" viewBox="0 0 48 48">
                            <path
                                d="M43.5 11a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-28 13a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-8 22a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM36 28.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                opacity=".2"></path>
                            <path
                                d="M37.2 5.5a4.3 4.3 0 1 1 3.36 4.2l-6.44 13.38a4.3 4.3 0 1 1-6.93 3.33l-.02-.02-9.98-5.67a4.3 4.3 0 0 1-4.1 2.07l-5.2 14.13a4.3 4.3 0 1 1-1.49-.63l5.13-13.96a4.3 4.3 0 1 1 6.22-3.15l9.81 5.58a4.3 4.3 0 0 1 5.12-2.4l6.4-13.3a4.3 4.3 0 0 1-1.89-3.56Zm4.3-2.7a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm-28 13a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm-8 22a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm23.3-11.3a2.7 2.7 0 1 0 5.4 0 2.7 2.7 0 0 0-5.4 0Z">
                            </path>
                        </svg>
                        <h3 class="p-ff-roboto-slab-bold fs-title fc-black-700 mt24 mb12 mnh64">Learn, share, grow</h3>
                        <p class="fs-body3 mb32"> Adopt a Growth Mindset. Be curious and eager to learn. Aim for
                            ethical, sustainable, long-term growth, both personally and in the company. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="fixed">
                    <marquee behavior="s" direction="left" class="marq">
                        <div class="col-lg-2 col-sm-10">
                            <img src="assests/images/javaa.png" alt="java img" height="100" class="scroll">

                            <img src="assests/images/php.png" alt="php img" height="100" class="scroll">

                            <img src="assests/images/pythonn.png" alt="python img" height="100" class="scroll">

                            <img src="assests/images/c.jpeg" alt="clang img" height="100" class="scroll">

                            <img src="assests/images/download.png" alt="js img" height="100" class="scroll">

                            <img src="assests/images/c++.jpeg" alt="js img" height="100" class="scroll">
                        </div>

                    </marquee>
                </div>
            </div>>
        </div>
        </div>
        </div>
        </div>
    </section>
    <?php include "partials/_footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="assests/app.js"></script>
</body>

</html>