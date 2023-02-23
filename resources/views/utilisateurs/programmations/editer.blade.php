@extends('layouts.utilisateurs.master')

@section('sous-contenu')
    <div class="wrapper">
        <div class="header">
            <ul>
                <li class="active form_1_progessbar">
                    <div>
                        <p>1</p>
                    </div>
                </li>
                <li class="form_2_progessbar">
                    <div>
                        <p>2</p>
                    </div>
                </li>
                <li class="form_3_progessbar">
                    <div>
                        <p>3</p>
                    </div>
                </li>
                <li class="form_4_progessbar">
                    <div>
                        <p>4</p>
                    </div>
                </li>
                <li class="form_5_progessbar">
                    <div>
                        <p>5</p>
                    </div>
                </li>
                <li class="form_6_progessbar">
                    <div>
                        <p>6</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Choisir la parité du semestre</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <input type="button" class="button_click" value="Impair">
                            <input type="button" class="button_click" value="Pair">
                        </div>
                    </div>
                </form>
            </div>
            <div class="form_2 data_info" style="display: none;">
                <h2>Choisir le semestre</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <input type="button" class="button_click" value=1>
                            <input type="button" class="button_click" value=2>
                            <input type="button" class="button_click" value=3>
                            <input type="button" class="button_click" value=4>
                            <input type="button" class="button_click" value=5>
                            <input type="button" class="button_click" value=6>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form_3 data_info" style="display: none;">
                <h2>Choisir la filière</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <input type="button" class="button_click" value="GBA3">
                            <input type="button" class="button_click" value="IG3-ARI">
                            <input type="button" class="button_click" value="GTL3">
                            <input type="button" class="button_click" value="GRH3">
                            <input type="button" class="button_click" value="PLAN3-EGE">
                            <input type="button" class="button_click" value="GFC3">
                        </div>
                    </div>
                </form>
            </div>
            <div class="form_4 data_info" style="display: none;">
                <h2>Choisir l'UE</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <input type="button" class="button_click" value="Administration des bases de données">
                            <input type="button" class="button_click" value="Electronique ">
                            <input type="button" class="button_click" value="Gestion prévisionnelle et budgétaire">
                            <input type="button" class="button_click" value="Introduction à l'intelligence artificielle">
                            <input type="button" class="button_click" value="Droits des TIC">
                            <input type="button" class="button_click" value="Cryptographie">
                        </div>
                    </div>
                </form>
            </div>
            <div class="form_5 data_info" style="display: none;">
                <h2>Choisir l'ECUE</h2>
                <form>
                    <div class="form_container">
                        <input type="button" class="button_click" value="Electronique Analogique">
                        <input type="button" class="button_click" value="Electronique Numerique">
                    </div>
                </form>
            </div>
            <div class="form_6 data_info" style="display: none;">
                <h2>Valider la programmation</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <input type="text" name="Date_debut" placeholder="Date début du cours" class="input"
                                id="Date_debut">
                        </div>
                        <div class="input_wrap">
                            <input type="text" name="Heure_debut" placeholder="Horaire du début" class="input"
                                id="Heure_debut">
                        </div>
                        <div class="input_wrap">
                            <input type="text" name="Horaire_jour" placeholder="Horaire par jour" class="input"
                                id="Horaire_jour">
                        </div>
                        <div class="input_wrap">
                            <input type="text" name="Horaire_TP" placeholder="Masse Horaire TP" class="input"
                                id="Horaire_TP">
                        </div>
                        <div class="input_wrap">
                            <input type="text" name="Horaire_TD" placeholder="Masse horaire TD" class="input"
                                id="Horaire_jour">
                        </div>
                    </div>
                </form>
            </div>
            </form>
        </div>
        <div class="btns_wrap">
            <div class="common_btns form_1_btns">
                <button type="button" class="btn_next">Suivant <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_2_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span> Précédent</button>
                <button type="button" class="btn_next">Suivant <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_3_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span> Précédent</button>
                <button type="button"class="btn_next">Suivant <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_4_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span> Précédent</button>
                <button type="button" class="btn_next">Suivant <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_5_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span> Précédent</button>
                <button type="button" class="btn_next">Suivant <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_6_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span> Précédent</button>
                <button type="button" class="btn_done">Terminé
                    <span class="icon">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                </button>
            </div>
        </div>
    </div>

    <div class="modal_wrapper">
        <div class="shadow"></div>
        <div class="success_wrap">
            <span class="modal_icon">
                <ion-icon name="checkmark-sharp"></ion-icon>
            </span>
            <p>Vous avez terminé le processus avec SUCCES .</p>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endsection