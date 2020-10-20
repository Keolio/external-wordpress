<?php /* Template Name: Gui */ ?>

<?php get_header(); ?>

<div class="gui">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="text-center">Couleurs</h1>
                <div class="gui__color">
                    <div class="row flex-row">
                        <div class="col-2 gui__color__black"></div>
                        <div class="col-2 gui__color__lightblack"></div>
                        <div class="col-2 gui__color__grey"></div>
                        <div class="col-2 gui__color__white"></div>
                        <div class="col-2 gui__color__primary"></div>
                        <div class="col-2 gui__color__secondary"></div>
                        <div class="col-2 gui__color__third"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <h1 class="text-center">Boutons</h1>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="#" class="btn btn-primary">Bouton 1</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="#" class="btn btn-secondary">Bouton 2</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <h1 class="text-center">Titres</h1>
                <div class="gui__title">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Hn</th>
                            <th>Class</th>
                            <th>Result</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>H1</td>
                            <td>.h--1</td>
                            <td><h1 class="h--1">Titre H1</h1></td>
                        </tr>
                        <tr>
                            <td>H2</td>
                            <td>.h--2</td>
                            <td><h2 class="h--2">Titre H2</h2></td>
                        </tr>
                        <tr>
                            <td>H3</td>
                            <td>.h--3</td>
                            <td><h3 class="h--3">Titre H3</h3></td>
                        </tr>
                        <tr>
                            <td>H4</td>
                            <td>.h--4</td>
                            <td><h4 class="h--4">Titre H4</h4></td>
                        </tr>
                        <tr>
                            <td>H5</td>
                            <td>.h--5</td>
                            <td><h5 class="h--5">Titre H5</h5></td>
                        </tr>
                        <tr>
                            <td>Display 1</td>
                            <td>.display--1</td>
                            <td><p class="display--1">Display 1</></td>
                        </tr>
                        <tr>
                            <td>Display 2</td>
                            <td>.display--2</td>
                            <td><p class="display--2">Display 2</p></td>
                        </tr>
                        <tr>
                            <td>Display 3</td>
                            <td>.display--3</td>
                            <td><p class="display--3">Display 3</p></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
