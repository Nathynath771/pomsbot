<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        .cloy:after, .cloy:before {
            display: none;
        }

        .container {
            background: transparent;
        }

        .box {
            justify-content: flex-start;
        }

        @media (min-width: 1024px) {
            .cloy {
                grid-column: 1 / 13;
                grid-row: 1 / 4;
                width: 100%;
            }

        }

        @media (max-width: 1024px) {
            .cloy {
                grid-column: 1 / 7;
                grid-row: 2 / span 2;
            }
        }

        label {
            color: #3c59a3;
            font-weight: 600;
            font-size: 13px;
        }

        .form-control {
            margin-top: 10px;
            border: 0;
            border-bottom: 1px solid #cccccc;
            border-radius: 0;
            font-weight: 200 !important;
            font-size: 15px;
            padding: 10px 0 !important;
        }

        button.btn-pill.white span {
            display: block;
            font-size: 11px;
            margin-top: 3px;
        }

        button.btn-pill.white b {
            font-weight: bold;
        }

        button.btn-pill.white {
            background: #3c59a3;
            border: 0;
            color: white;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
            width: 100%;
        }

        button.btn-pill.white:hover {
            cursor: pointer;
            background: #20b259;
        }

        .alert-info {
            border-color: transparent;
            margin-bottom: 20px;
        }

        .alert {
            padding: 7px 2px 10px 10px;
            background: #181a1d;
            color: #fff;
            font-size: 13px;
        }

        .alert img {
            float: right;
            max-height: 125px;
            padding: 0px 0 0 10px;
        }

        .form-group img {
            float: left;
            max-width: 30px;
        }

        input.select2-search__field {
            font-weight: 200 !important;
            font-size: 15px !important;
            padding: 0 !important;
        }

        .select2-container--material .select2-selection--multiple {
            margin: 0;
            padding: 0 !important;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="content_box box cloy">
        <form method="post" action="/publish">
            <?php echo csrf_field(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="firstname">Discord ID</label>
                        <input type="text" class="form-control" id="discord_id" aria-describedby="discord_id"
                               placeholder="ID Discord" name="discord_id" required="required">
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="discord_id">Communauté</label>
                    <select class="js-select2" id="community" name="community[]"
                            required="required" multiple>
                        <option value="719061346448048129">Français</option>
                        <option value="776494209195704350">Anglais</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="firstname">Prénom ou <b>Pseudo</b>*</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="firstname"
                               placeholder="Prénom (ou pseudo)" name="firstname" required="required">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="city">Votre ville où département ou région de vie*</label>
                        <input type="text" class="form-control" id="city" aria-describedby="city"
                               placeholder="Paris, Lyon, Bruxelles, Quebec, .." name="city" required="required">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="city">Votre passe-temps*</label>
                        <textarea class="form-control" id="hobbies" aria-describedby="hobbies"
                                  placeholder="Course à pied, Instrument de musique, Informatique,.." name="hobbies"
                                  required="required" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="city">Petite présentation rapide*</label>
                        <textarea class="form-control" id="presentation" aria-describedby="presentation"
                                  placeholder="Parlez nous un peu de vous, ce qui vous branches, ce qui fait que vous vous levez chaque matin.."
                                  name="presentation" required="required"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="firstname">Comment avez-vous trouvé le serveur ? (Merci d'indiquer le pseudo de la
                            personne qui vous a invité ici ou le nom du serveur ou site sur lequel vous l'avez
                            trouvé)</label>
                        <input type="text" class="form-control" id="refered" aria-describedby="refered"
                               placeholder="Pseudo#0000 / Serveur de geek" name="refered">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3 mt-4">
                    <button type="submit" class="links-suppressor join-btn btn-pill white">
                        Publié sur le serveur
                    </button>
                </div>
            </div>
    </div>
</div>
</form>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
<script src="./script.js"></script>
</body>
<?php /**PATH D:\laragon\fuckboy\resources\views/presentation_tool.blade.php ENDPATH**/ ?>