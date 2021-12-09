<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .detail {
            align-self: center;
            background-color: cornflowerblue;
            }

        .picture{
            align-items: center;
        }
    </style>


</head>

<body>

    <div class="container" style="align-items: center;">
        <img src="https://www.chillpainai.com/src/wewakeup/scoop/images/150ec39f5499b75bfb5f8241a409595b2fbc7210.jpg"
            class="img-fluid" alt="..." width="80%" height="20%">
        <div class="container">
            <div class="col-12 bg3"></div><br/>
        
        </div>
        <div class="picture">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdw-3Y4KqvCUU4fPtb3bqh81I3Ke68aajZVw&usqp=CAU"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">ภูเขาไฟฟูจิ (富士山 / Mount Fuji / ฟูจิซัง)
                            เป็นภูเขาที่มีชื่อเสียงและสูงที่สุดในญี่ปุ่น
                            ได้รับการขึ้นทะเบียนเป็นมรดกโลกทางวัฒนธรรมเนื่องจากความงดงามของทิวทัศน์และภูมิหลังที่เป็นที่ศรัทธามานับตั้งแต่ครั้งอดีต
                            สามารถกล่าวได้เต็มปากเลยว่าเป็นสัญลักษณ์แห่งญี่ปุ่น
                            ภูเขาฟูจิมีเส้นทางเดินขึ้นเขาและสาธารณูปโภคสำหรับอำนวยความสะดวกในการปีนเขาที่ได้รับบำรุงรักษาอย่างดี
                            ดังนั้นจึงมีนักปีนเขามากกว่า 200,000 คนมาเยือนทุกปี</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.kapook.com/u/panadda/2_3.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text"> โตเกียว ทาวเวอร์ หอคอย สื่อสารขนาดใหญ่ที่สวยงามมาก ตั้งอยู่ในเขตมินะโตะ
                            กรุงโตเกียว เป็นสถานที่ท่องเที่ยวที่มีชื่อเสียงเพราะใน 1 ปี มีผู้ร่วมเข้าชมถึง 2 ล้าน 5 คน
                            อีกทั้งยังเป็นเหมือนสัญลักษณ์เพื่อแสดงถึงอำนาจและอิทธิพลทางเศรษฐกิจของ โลก
                            เป็นที่ถ่ายทอดสัญญาณโทรทัศน์ วิทยุ ซึ่งที่นี่ได้แรงบันดาลใจมาจากหอคอยสูงในปารีส
                        </p>
                    </div>
                </div>
            </div>

        </div>
            <div class="col-9">
                <button id="btnBack"> back </button>

                <div id="main">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost">
                        </tbody>
                    </table>
                </div>

                <div id="detail">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <div class="detail">
            <div class="row" style="margin-left: 50%;">
                <div class="col-12 bg4">
                    <p>63104111 นายธนพล รัตนมะโน</p>
                    
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();

      
        var url = "https://jsonplaceholder.typicode.com/posts/" + id

        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, err, status) => {

            })


    }

    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"
        var i = 0;
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                   
                    i++;
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i == 10) {
                        loadPost().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {

            })
    }

    $(() => {
        LoadPosts();
        $("#detail").hide();
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
        });
    })
</script>





</html>
