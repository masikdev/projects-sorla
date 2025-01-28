<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorla Architecture</title>


    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <!-- ANIMATED ON SCROLL -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="/">
                    <img src="{{ url('assets/logo/sorla_logo_black.png') }}" alt="">
                </a>
            </div>
            <div class="main-navbar">
                <ul>
                    <li><a href="/">All</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Interior</a></li>
                    <li><a href="#">Foundation Projects</a></li>
                    <li><a href="#">Building Performance</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="project">
        <section class="project-detail">
            <div class="title">
                <h3>{{ $project->project_name }}</h3>
            </div>
            <table>
                <tr>
                    <td>Type :</td>
                    <td>{{ $project->category }}</td>
                </tr>
                <tr>
                    <td>Location :</td>
                    <td>{{ $project->location }}</td>
                </tr>
                <tr>
                    <td>Size:</td>
                    <td>{{ $project->size }}</td>
                </tr>
                <tr>
                <tr>
                    <td>Status:</td>
                    <td>{{ $project->status }}</td>
                </tr>
                <tr>
                    <td>Date Project:</td>
                    <td>{{ \Carbon\Carbon::parse($project->date)->format('d F Y') }}</td>
                </tr>

            </table>
            <div class="description">
                <h3 class="fw-bold">Description</h3>
                <p>{{ $project->description }}</p>
            </div>
        </section>


        <section class="project-gallery">
            <ul class="project-images">
                @foreach ($gambarProject as $gambar)
                    <li class="project-img" data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ asset('storage/' . $gambar->image_desc) }}" target="_blank">
                            <img src="{{ asset('storage/' . $gambar->image_desc) }}" alt="">
                            <div class="image-info">
                                <h4>{{ $gambar->image_name }}</h4>
                            </div>
                        </a>
                    </li>
                @endforeach
                {{-- <li class="project-img"><img src="{{ url('images-sample/arf-interior/1.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/2.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/3.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/4.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/5.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/6.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/7.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/8.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/9.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/10.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/11.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/12.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/13.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/14.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/15.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/16.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/17.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/18.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/19.jpg') }}" alt=""></li>
                <li class="project-img"><img src="{{ url('images-sample/arf-interior/20.jpg') }}" alt=""></li> --}}
            </ul>
        </section>
    </main>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
