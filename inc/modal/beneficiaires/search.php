<div id="searchBenModal" class="search-modal modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content inmodal">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-users me-3"></i>Bénéficiaires <i class="fa fa-chevron-right"></i> <b>Rechercher</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form id="rechercher" name="rechercher" class="row g-3">
                    <div class="col-md-6">
                        <!-- <label for="divers" class="form-label">Nom, ID, LC, Tél.</label> -->
                        <input type="text" class="form-control" id="divers" placeholder="Nom, ID, LC, Tél." required>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" id="prestation" name="prestation">
                            <option value="encours">En cours de prestation</option>
                            <!--<option value="bilan">Terminées sans bilan</option>-->
                            <option value="toutvoir">Tout voir</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="con_num" class="form-label">Conseiller</label>
                        <select class="form-select" id="con_num" name="con_num" onchange="">
                            <option value="">...</option>
                            <option value="1198">ABDOULKARIM Anissa &nbsp;&nbsp;</option>	
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="lot_num" class="form-label">Marché</label>
                        <select class="form-select" id="lot_num" name="lot_num" onchange="">
                            <option value="">...&nbsp;&nbsp;</option>						
                            <option value="21">14109 ACP19-PACA 06 83 &nbsp;&nbsp;</option>						
                            <option value="23">14614 ACL-PACA 06 83 &nbsp;&nbsp;</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label for="tpp_num" class="form-label">Type de prestation</label>
                        <select class="form-select" id="tpp_num" name="tpp_num" onchange="">
                            <option value="">...&nbsp;&nbsp;</option>						<option value="8">ACL &nbsp;&nbsp;</option>
                            <option value="6">AP2 &nbsp;&nbsp;</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="profil" class="form-label">Profil ou code rome</label>
                        <input class="form-control" id="profil" name="profil" type="text">
                    </div>
                    <div class="mb-3">
                        <!-- <input class="btn btn-primary" type="submit" onclick="xajax_affiche_benef(xajax.getFormValues('rechercher'));"
                            value="Afficher"> -->
                            <button class="btn btn-primary" type="submit">Afficher</button>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</div>
