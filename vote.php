<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electoral Vote</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid back">
        <div class="card inner border rounded">
            <h2 class="ms-3 mt-3">Victoria</h2>
            <h2 class="ms-3">Electoral Division of Menzies</h2>
            <p class="ms-3 mt-3"><b>Number the boxes from 1 to 8 in the order of your choice.</b></p>
            <form class="px-4 mb-4" oninput="validate()" action="voteSubmit.php" method="POST">
                <div class="mb-3 mt-3">
                    <input type="number" id="box1" name="box1" min="1" max="8">
                    <label for="box1" class="text-black">Choice 1</label>
                </div>
                <div class="mb-3">
                    <input type="number" id="box2" name="box2" min="1" max="8">
                    <label for="box2" class="text-black">Choice 2</label>
                </div>
                <div class="mb-3">
                    <input type="number" id="box3" name="box3" min="1" max="8">
                    <label for="box3" class="text-black">Choice 3</label>
                </div>
                <div class="mb-3">
                    <input type="number" id="box4" name="box4" min="1" max="8">
                    <label for="box4" class="text-black">Choice 4</label>
                </div>
                <div class="mb-3">
                    <input type="number" id="box5" name="box5" min="1" max="8">
                    <label for="box5" class="text-black">Choice 5</label>
                </div>
                <div class="mb-3">
                    <input type="number" id="box6" name="box6" min="1" max="8">
                    <label for="box6" class="text-black">Choice 6</label>
                </div>
                <div class="mb-3">
                    <input type="number" id="box7" name="box7" min="1" max="8">
                    <label for="box7" class="text-black">Choice 7</label>
                </div>
                <div class="mb-3">
                    <input type="number" id="box8" name="box8" min="1" max="8">
                    <label for="box8" class="text-black">Choice 8</label>
                </div>
                <div class="text-center">
                    <button id="submit" type="submit" class="btn btn-warning ms-2 py-2 border border-dark rounded"
                        disabled>VOTE</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        // Function to prevent users from submitting empty form
        function validate() {
            box1 = document.getElementById('box1').value;
            box2 = document.getElementById('box2').value;
            box3 = document.getElementById('box3').value;
            box4 = document.getElementById('box4').value;
            box5 = document.getElementById('box5').value;
            box6 = document.getElementById('box6').value;
            box7 = document.getElementById('box7').value;
            box8 = document.getElementById('box8').value;
            if (box1.length < 1 || box2.length < 1 || box3.length < 1 || box4.length < 1 || box5.length < 1 || box6.length < 1 || box7.length < 1 || box8.length < 1) {
                document.getElementById('submit').disabled = true;
            } else {
                document.getElementById('submit').disabled = false;
            }
        }
    </script>
</body>

</html>