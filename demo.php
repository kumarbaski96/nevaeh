<!doctype html>
<html lang="en">
  <head>
    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      .gallery {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: 20px;
          padding: 20px;
      }
      .card {
          background: #fff;
          border: 1px solid #ddd;
          border-radius: 10px;
          overflow: hidden;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          text-align: center;
      }
      .card img {
          width: 100%;
          height: auto;
      }
      .card h3 {
          margin: 15px 0 5px;
      }
      .card p {
          color: #666;
          margin: 0 0 15px;
      }
      @media (max-width: 600px) {
          .gallery {
              grid-template-columns: 1fr;
          }
      }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" integrity="sha384-He3RckdFB2wffiHOcESa3sf4Ida+ni/fw9SSzAcfY2EPnU1zkK/sLUzw2C5Tyuhj" crossorigin="anonymous">

    <title>TITLE_GOES_HERE</title>
  </head>
  <body>
    <div class="container">
      <div class="gallery">
        <div class="card">
            <img src="img/e1.jpg" alt="Employee 1">
            <h3>Hanna Doe</h3>
            <p>Software Engineer</p>
        </div>
        <div class="card">
            <img src="img/e2.jpg" alt="Employee 2">
            <h3>John Smith</h3>
            <p>Project Manager</p>
        </div>
        <div class="card">
            <img src="img/e3.jpg" alt="Employee 3">
            <h3>Sofia Brown</h3>
            <p>UI/UX Designer</p>
        </div>
        <div class="card">
            <img src="img/e4.jpg" alt="Employee 4">
            <h3>Emily White</h3>
            <p>HR Specialist</p>
        </div>
    </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>