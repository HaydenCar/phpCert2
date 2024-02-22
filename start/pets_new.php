<?php
require 'lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = 'A dog without a name';
    }

    if (isset($_POST['breed'])) {
        $breed = $_POST['breed'];
    } else {
        $breed = '';
    }

    $pets = get_pets();
    $newPet = array(
        'name' => $name,
        'breed' => $breed,
    );
    $pets[] = $newPet;

    save_pets($pets);

    header('Location: /start/index.php');
    die;
}
?>

<?php require 'layout/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>HI I AM A PAGE DONKEY</h1>

            <form action="/start/pets_new.php" method="POST">
            <div class="form-group">
                <label for="pet-name" class="control-label">Pet Name</label>
                <input type="text" name="name" id="pet-name" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="pet-breed" class="control-label">Pet Breed</label>
                <input type="text" name="breed" id="pet-breed" class="form-control"/>
            </div>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-heart"></span>
                    add
                </button>
            </form>
        </div>
    </div>
</div>
<?php require 'layout/footer.php'; ?>