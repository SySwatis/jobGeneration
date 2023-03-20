<div
  id="myModal"
  class="reveal-modal open"
  data-reveal=""
  aria-labelledby="modalTitle"
  data-options="close_on_background_click : false"
  aria-hidden="false"
  role="dialog"
  style="display: block; opacity: 1; visibility: visible; top: 100px"
  tabindex="0"
>
  <a
    class="close-reveal-modal"
    aria-label="Close"
    onclick="xajax_vide_div('contenu_modal')"
    id="close"
    >×</a
  >

  <div id="contenu_modal">
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310493')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          CAJELOT Astrid Jeanne
        </span>
        <br />AJC.CAJELOT@ORANGE.FR
        <br />
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882501" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882501"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882501','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882501',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310493"
              name="mov_num_310493"
              onchange="xajax_update_motif_vsi(310493,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310493"
          name="con_num310493"
          onchange="xajax_update_conseiller_accueil(this.value,1685111,310493)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310493"
          style="height: 100px"
          placeholder="Ajouter une note pour Astrid Jeanne CAJELOT"
          onchange="xajax_update_champ('client_prestation','clp_note',310493,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        4819847P<br />
        Début : 18/11/2020 <br />
        fin : 15/01/2021 SPACLL2171
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310494')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          FOURTINES Gerald
        </span>
        <br />GERALDFOURTINES@GMAIL.COM
        <br />
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882502" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882502"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882502','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882502',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310494"
              name="mov_num_310494"
              onchange="xajax_update_motif_vsi(310494,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310494"
          name="con_num310494"
          onchange="xajax_update_conseiller_accueil(this.value,1685111,310494)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310494"
          style="height: 100px"
          placeholder="Ajouter une note pour Gerald FOURTINES"
          onchange="xajax_update_champ('client_prestation','clp_note',310494,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        4552029H<br />
        Début : 18/11/2020 <br />
        fin : 15/01/2021 SPACLL2167
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310485')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          GIGER Philippe
        </span>
        <br />PHILIPPE83690@LIVE.FR
        <br />
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882493" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882493"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882493','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882493',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310485"
              name="mov_num_310485"
              onchange="xajax_update_motif_vsi(310485,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310485"
          name="con_num310485"
          onchange="xajax_update_conseiller_accueil(this.value,1684933,310485)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310485"
          style="height: 100px"
          placeholder="Ajouter une note pour Philippe GIGER"
          onchange="xajax_update_champ('client_prestation','clp_note',310485,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        5269894W<br />
        Début : 18/11/2020 <br />
        fin : 18/01/2021 SPACLL2163
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310496')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          GROBOVNIKOV Daria
        </span>
        <br />daria.chadrina@gmail.com
        <br />
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882504" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882504"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882504','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882504',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310496"
              name="mov_num_310496"
              onchange="xajax_update_motif_vsi(310496,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310496"
          name="con_num310496"
          onchange="xajax_update_conseiller_accueil(this.value,1685111,310496)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310496"
          style="height: 100px"
          placeholder="Ajouter une note pour Daria GROBOVNIKOV"
          onchange="xajax_update_champ('client_prestation','clp_note',310496,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        5693377D<br />
        Début : 18/11/2020 <br />
        fin : 18/01/2021 SPACLL2172
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310497')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          JEANDEL Eric
        </span>
        <br />eric.jeandel@sfr.fr <br />04 94 70 54 85
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882505" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882505"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882505','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882505',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310497"
              name="mov_num_310497"
              onchange="xajax_update_motif_vsi(310497,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310497"
          name="con_num310497"
          onchange="xajax_update_conseiller_accueil(this.value,1685111,310497)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310497"
          style="height: 100px"
          placeholder="Ajouter une note pour Eric JEANDEL"
          onchange="xajax_update_champ('client_prestation','clp_note',310497,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        5630818E<br />
        Début : 18/11/2020 <br />
        fin : 18/01/2021 SPACLL2168
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310486')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          JOYE Morgan
        </span>
        <br />JOYE.MORGAN@YAHOO.FR <br />04 94 50 37 80
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882494" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882494"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882494','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882494',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310486"
              name="mov_num_310486"
              onchange="xajax_update_motif_vsi(310486,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310486"
          name="con_num310486"
          onchange="xajax_update_conseiller_accueil(this.value,1684933,310486)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310486"
          style="height: 100px"
          placeholder="Ajouter une note pour Morgan JOYE"
          onchange="xajax_update_champ('client_prestation','clp_note',310486,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        5474128P<br />
        Début : 18/11/2020 <br />
        fin : 15/01/2021 SPACLL2159
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310476')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          MANGIN Christine
        </span>
        <br />C.MANGIN947@LAPOSTE.NET
        <br />
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882484" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882484"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882484','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882484',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310476"
              name="mov_num_310476"
              onchange="xajax_update_motif_vsi(310476,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310476"
          name="con_num310476"
          onchange="xajax_update_conseiller_accueil(this.value,1685139,310476)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310476"
          style="height: 100px"
          placeholder="Ajouter une note pour Christine MANGIN"
          onchange="xajax_update_champ('client_prestation','clp_note',310476,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        5431493X<br />
        Début : 18/11/2020 <br />
        fin : 15/01/2021 SPACLL2181
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310478')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          MONZONIS Anne-Marie
        </span>
        <br />mmonzonis@bbox.fr <br />04 94 47 75 57
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882486" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882486"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882486','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882486',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310478"
              name="mov_num_310478"
              onchange="xajax_update_motif_vsi(310478,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310478"
          name="con_num310478"
          onchange="xajax_update_conseiller_accueil(this.value,1685139,310478)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310478"
          style="height: 100px"
          placeholder="Ajouter une note pour Anne-Marie MONZONIS"
          onchange="xajax_update_champ('client_prestation','clp_note',310478,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        4271999C<br />
        Début : 18/11/2020 <br />
        fin : 18/01/2021 SPACLL2180
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('310489')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          POCLET Cecile
        </span>
        <br />CECILE.POCLET@ORANGE.FR <br />04 94 47 11 65
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">
            S'est présenté et a démarré la prestation
          </div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_882497" style="display: none">
          <div class="medium-12 columns">
            <textarea
              id="com1_882497"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','882497','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','882497',this.value,this.id);;"
            ></textarea>
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_310489"
              name="mov_num_310489"
              onchange="xajax_update_motif_vsi(310489,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4">Indisponible autre &nbsp;&nbsp;</option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num310489"
          name="con_num310489"
          onchange="xajax_update_conseiller_accueil(this.value,1684933,310489)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_310489"
          style="height: 100px"
          placeholder="Ajouter une note pour Cecile POCLET"
          onchange="xajax_update_champ('client_prestation','clp_note',310489,this.value,this.id)"
        >
camille</textarea
        >
      </div>
      <div class="large-3 columns text-left small-margin">
        4560451M<br />
        Début : 18/11/2020 <br />
        fin : 15/01/2021 SPACLL2164
      </div>
    </div>
    <hr />
    <div class="row" style="display: block; margin-left: 0px; opacity: 1">
      <div class="large-3 columns text-left small-margin">
        <span
          class="button stable small"
          onclick="xajax_affiche_info('333194')"
        >
          <img alt="" src="img/view.png" exify_intitialized="true" />
          ROUSSEAU Florent
        </span>
        <br />FLO44ROUSSEAU@LAPOSTE.NET <br />06 16 43 71 53
      </div>
      <div class="large-3 columns text-left small-margin">
        <div class="row">
          <div class="medium-12 columns">Non adhésion</div>
        </div>
        <div class="row">
          <div class="medium-12 columns" id="precision"></div>
        </div>
        <div class="row" id="commentaire_954780" style="display: block">
          <div class="medium-12 columns">
            <textarea
              id="com1_954780"
              placeholder="Commentaire obligatoire"
              onchange="xajax_update_champ('prise_rendez_vous','prv_date_update','954780','20/03/2023',this.id);xajax_update_champ('prise_rendez_vous','prv_commentaire','954780',this.value,this.id);;"
            >
Suggestion AP2
projet non défini</textarea
            >
            <br />
            Confirmation Motif : Info interne
            <select
              id="mov_num_333194"
              name="mov_num_333194"
              onchange="xajax_update_motif_vsi(333194,this.value)"
            >
              <option value="">...&nbsp;&nbsp;</option>
              <option value="2">
                Autoprescription – erreur de prestation &nbsp;&nbsp;
              </option>
              <option value="7">
                Covid suspicion ou personne à risque &nbsp;&nbsp;
              </option>
              <option value="9">Déjà en prestation EMD &nbsp;&nbsp;</option>
              <option value="1">En emploi/en formation &nbsp;&nbsp;</option>
              <option value="4" selected="selected">
                Indisponible autre &nbsp;&nbsp;
              </option>
              <option value="3">
                Indisponible garde d’enfants &nbsp;&nbsp;
              </option>
              <option value="6">
                Manque info sur la prestation (pas de convocation) &nbsp;&nbsp;
              </option>
              <option value="8">Problème de mobilité &nbsp;&nbsp;</option>
              <option value="5">
                Raison médical (RDV, hospitalisation prévue…) &nbsp;&nbsp;
              </option>
            </select>

            <br />
          </div>
        </div>
      </div>
      <div class="large-3 columns text-left small-margin">
        <select
          id="con_num333194"
          name="con_num333194"
          onchange="xajax_update_conseiller_accueil(this.value,1880233,333194)"
        >
          <option value="">...&nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1198">
            ABDOULKARIM Anissa &nbsp;&nbsp;
          </option>
          <option value="1089">
            ABOUTRAD Sophie 06 14 19 93 61 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="480">
            AJROUDI Inès &nbsp;&nbsp;
          </option>
          <option value="545">ANIEL Samira &nbsp;&nbsp;</option>
          <option value="290">
            ANTONINI Michel 06 88 14 84 98 &nbsp;&nbsp;
          </option>
          <option value="295">
            ARMANDO Sylvain 06 77 98 55 63 &nbsp;&nbsp;
          </option>
          <option value="269">ARNAUD Sophie 06 77 98 62 06 &nbsp;&nbsp;</option>
          <option value="1288">
            ARNOUX Emmanuelle 07 57 44 24 85 &nbsp;&nbsp;
          </option>
          <option value="1166">
            ASSANTE Cassandra 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="981">AVELLAN Stéphanie 0612353145 &nbsp;&nbsp;</option>
          <option value="885">
            BARBIER Sahondra 07 57 48 54 87 &nbsp;&nbsp;
          </option>
          <option value="1388">
            BARBIERA Emmanuelle 07 63 75 93 17 &nbsp;&nbsp;
          </option>
          <option value="1316">
            BARRERE Laure 07 67 81 92 39 &nbsp;&nbsp;
          </option>
          <option value="856">BARY Renaut 07 57 44 24 90 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="618">
            BEAUJARD Nathan &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1245">
            BEC Myriam &nbsp;&nbsp;
          </option>
          <option value="1223">
            BEGOU Nathalie 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="1151">BEJOT Alice 07 81 93 62 14 &nbsp;&nbsp;</option>
          <option value="613">
            BENCHAIB Fairouz 07 72 26 51 01 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="860">
            BENHISSEN Leïla &nbsp;&nbsp;
          </option>
          <option value="106">BERGER Anouk 06 77 98 63 35 &nbsp;&nbsp;</option>
          <option value="970">
            BERNARD Jacques 07 50 83 04 09 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1246">
            BOIMOND Mélanie &nbsp;&nbsp;
          </option>
          <option value="1358">
            BOUALEM Sabrina 07 82 35 07 62 &nbsp;&nbsp;
          </option>
          <option value="606">BOUR Muriel &nbsp;&nbsp;</option>
          <option value="837">
            BOURGAULT Virginie 07 57 48 54 89 &nbsp;&nbsp;
          </option>
          <option value="649">
            BOURGES Lionel 07 82 65 48 29 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="542">
            BOUVARD Laetitia 07 57 40 35 61 &nbsp;&nbsp;
          </option>
          <option value="727">
            BOUVEYRON Karine 06 10 41 25 17 &nbsp;&nbsp;
          </option>
          <option value="1350">
            BOUVIER Aurélien 07 66 84 79 68 &nbsp;&nbsp;
          </option>
          <option value="1224">BRAND Sam-Shady &nbsp;&nbsp;</option>
          <option value="857">
            BRAYMAND Delphine 07 57 48 68 27 &nbsp;&nbsp;
          </option>
          <option value="1210">BRETON Geraldine 0652334909 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="592">
            BRETON Géraldine &nbsp;&nbsp;
          </option>
          <option value="1369">BRIAND Chloé &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1189">
            BRION Matthieu 07 81 49 91 13 &nbsp;&nbsp;
          </option>
          <option value="1187">
            BULCOURT Emilie 07 49 70 77 42 &nbsp;&nbsp;
          </option>
          <option value="1362">CAFIERI ------ &nbsp;&nbsp;</option>
          <option value="537">
            CAFIERI Cecile 07 57 40 35 53 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="858">
            CAILLETEAU Aurore &nbsp;&nbsp;
          </option>
          <option value="1340">CARAMAZZA Jessica &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="789">
            CARMONA Carole &nbsp;&nbsp;
          </option>
          <option value="1378">CAROUGE CAROLINE &nbsp;&nbsp;</option>
          <option value="1390">
            CAVAILLAC Cassandra 07 68 27 10 83 &nbsp;&nbsp;
          </option>
          <option value="1247">
            CHARMOY Sonia 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="550">
            CHATAIL Sylvie 07 57 40 35 45 &nbsp;&nbsp;
          </option>
          <option value="882">
            CHATELAIN Sylvie 07 57 48 54 86 &nbsp;&nbsp;
          </option>
          <option value="607">CHEDAL Aicha 07 57 40 35 47 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="807">
            CHEMLEL Hanane &nbsp;&nbsp;
          </option>
          <option value="591">CHOURAQUI Laurent 0673799382 &nbsp;&nbsp;</option>
          <option value="540">
            COEURDEUIL Catherine 07 57 40 35 50 &nbsp;&nbsp;
          </option>
          <option value="109">COLIN Nadine 06 77 98 63 22 &nbsp;&nbsp;</option>
          <option value="1337">
            COLLONGE Charline 07 49 65 03 59 &nbsp;&nbsp;
          </option>
          <option value="107">
            COQUILLOT Laurence 06 77 98 62 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1217">
            DAVID Sheron &nbsp;&nbsp;
          </option>
          <option value="1359">
            DE LAVIGERIE Christine 06 33 69 23 39 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="806">
            DECOTTE Jane 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="104">
            DELOGET Sophie 06 77 98 63 05 &nbsp;&nbsp;
          </option>
          <option value="1278">
            DEMICHELIS Sabrina 06 77 44 03 57 &nbsp;&nbsp;
          </option>
          <option value="1276">DEMRI Hanna 06 18 87 62 70 &nbsp;&nbsp;</option>
          <option value="1386">
            DESTIBARDE Océane 07 49 64 98 23 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="456">
            DHO Julia 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="110">
            DI NAPOLI Sandra 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="980">
            DONADEI Delphine 06 11 19 19 43 &nbsp;&nbsp;
          </option>
          <option value="1064">
            DORVAULT Jean-Baptiste 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="706">
            DUBOIS Olivier &nbsp;&nbsp;
          </option>
          <option value="1342">
            ESPITALLIER Sébastien 07 69 07 21 57 &nbsp;&nbsp;
          </option>
          <option value="851">
            FAKKAK Sylviane 07 57 48 68 25 &nbsp;&nbsp;
          </option>
          <option value="1345">
            FERAUD Virginie 07 69 82 04 37 &nbsp;&nbsp;
          </option>
          <option value="1121">FERON Benoit 06 64 97 90 70 &nbsp;&nbsp;</option>
          <option value="1160">FERSI HENDA 07 69 92 63 90 &nbsp;&nbsp;</option>
          <option value="1384">FEUILLET JULIE &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="1057">
            FLINOIS Virginie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1273">FLOUS EDWIGE 07 57 40 35 61 &nbsp;&nbsp;</option>
          <option value="1391">
            FONTAINE Valérie 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option value="1199">
            FOUCAUD Christelle 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1266">GALLE Julie 07 68 39 99 49 &nbsp;&nbsp;</option>
          <option value="1366">GARBARINO Emilie &nbsp;&nbsp;</option>
          <option value="854" selected="selected">
            GARCIA Vanessa 07 57 40 35 59 &nbsp;&nbsp;
          </option>
          <option value="522">
            GAVILAN Laurence 07 57 44 24 84 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="712">
            GELLF Bonnie &nbsp;&nbsp;
          </option>
          <option value="1235">
            GENOT Nathalie 06 95 89 18 14 &nbsp;&nbsp;
          </option>
          <option value="1341">GHORAIEB Nadine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="719">
            GHRIBI RIMA &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="720">
            GIRARDIN Tina 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="835">
            GIRAUDO Pauline 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="971">
            GIRAULT Coralie 06 10 68 43 00 &nbsp;&nbsp;
          </option>
          <option value="1360">GOUIN Siham &nbsp;&nbsp;</option>
          <option value="979">GOUSSAY Laeticia 0614824320 &nbsp;&nbsp;</option>
          <option value="1072">
            GUIDICELLI Christèle 07 87 57 08 11 &nbsp;&nbsp;
          </option>
          <option value="155">
            GUILHEM Henri Philippe 06 71 64 58 39 &nbsp;&nbsp;
          </option>
          <option value="1039">
            GUILLEMAN Audrey 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="813">
            GUILLON Sylvie 07 57 48 41 71 &nbsp;&nbsp;
          </option>
          <option value="311">
            GUYOMARC’H Aurélie 07 87 43 80 22 &nbsp;&nbsp;
          </option>
          <option value="841">
            HADDAD Ehtimad 07 57 40 35 46 &nbsp;&nbsp;
          </option>
          <option value="1192">
            HADOU Madeleine 07 49 66 19 91 &nbsp;&nbsp;
          </option>
          <option value="1347">
            HAMROUCHI Mathieu 07 68 56 99 99 &nbsp;&nbsp;
          </option>
          <option value="66">
            HEBREARD Nicolas 07 82 82 13 41 &nbsp;&nbsp;
          </option>
          <option value="836">
            HUSSON Nicolas 07 57 48 54 92 &nbsp;&nbsp;
          </option>
          <option value="972">IKENE Dalila 0622745279 &nbsp;&nbsp;</option>
          <option value="1343">
            JALMAR Dorothée 07 49 41 89 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="737">
            JOLIVALT Sophie 07 57 44 24 82 &nbsp;&nbsp;
          </option>
          <option value="1441">JORDAN Sandrine &nbsp;&nbsp;</option>
          <option value="1147">
            KEBLE VALERIE 07 57 48 41 73 &nbsp;&nbsp;
          </option>
          <option value="805">KEHIHA Samia 07 57 48 41 66 &nbsp;&nbsp;</option>
          <option value="904">KHETTAB Safia 06 29 91 88 30 &nbsp;&nbsp;</option>
          <option value="1042">
            LAISNE Vanessa 06 23 94 34 55 &nbsp;&nbsp;
          </option>
          <option value="1387">LAMINE Léonie &nbsp;&nbsp;</option>
          <option value="803">LANFREY Elisabeth &nbsp;&nbsp;</option>
          <option value="905">
            LAURANS Véronique 07 57 44 24 78 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="810">
            LE MESTRE Valérie 07 57 48 41 70 &nbsp;&nbsp;
          </option>
          <option value="1348">
            LE PREVOST Aurélie 07 66 85 87 60 &nbsp;&nbsp;
          </option>
          <option value="657">
            LE TIEC Jessica 07 57 40 35 56 &nbsp;&nbsp;
          </option>
          <option value="689">LEFEBVRE Marie 0784124808 &nbsp;&nbsp;</option>
          <option value="108">
            LEHOUSSEL Christine 07 86 64 27 87 &nbsp;&nbsp;
          </option>
          <option value="1372">LEHOUX Adèle 07 49 86 10 62 &nbsp;&nbsp;</option>
          <option value="602">LEROY Claudie 06 77 98 63 14 &nbsp;&nbsp;</option>
          <option value="1173">
            LORSOLO Priscilla 07 49 71 63 16 &nbsp;&nbsp;
          </option>
          <option value="546">
            LOUVIEAUX Florianne 07 57 40 35 54 &nbsp;&nbsp;
          </option>
          <option value="152">LOVATI Noémie 06 77 98 62 40 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="990">
            MACHROUH Mina 07 57 48 68 26 &nbsp;&nbsp;
          </option>
          <option value="1205">
            MAGYARICS Aurore 07 82 20 49 52 &nbsp;&nbsp;
          </option>
          <option value="973">
            MAIGNET Sandrine 07 49 72 63 05 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="287">
            MAILLOT Amandine 06 77 98 63 12 &nbsp;&nbsp;
          </option>
          <option value="874">
            MANGIAROTTI CAMILLE 07 57 48 41 67 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="974">
            MANNARINI Rose-Marie 06 13 82 17 74 &nbsp;&nbsp;
          </option>
          <option value="1236">
            MANNINO Maria 06 95 24 23 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="101">
            MARCELLIN Emmy 06 49 04 40 74 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="496">
            MAREK Léa &nbsp;&nbsp;
          </option>
          <option value="1244">MARI Sonia 06 13 73 90 67 &nbsp;&nbsp;</option>
          <option value="100">
            MARIUS Christel 06 77 98 62 80 &nbsp;&nbsp;
          </option>
          <option value="812">
            MAROTEAUX Pauline 07 57 48 41 69 &nbsp;&nbsp;
          </option>
          <option value="1335">
            MARROT Jean-Frédéric 07 67 17 63 89 &nbsp;&nbsp;
          </option>
          <option value="1309">MARTEL Barbara &nbsp;&nbsp;</option>
          <option value="99">
            MASSIERA Karine 07 87 57 71 98 &nbsp;&nbsp;
          </option>
          <option value="790">
            MATHIEU Sophie 06 09 30 80 12 &nbsp;&nbsp;
          </option>
          <option value="950">
            MATTEI Catherine 06 71 72 94 10 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="103">
            MAUGEAIS Emilie 06 77 98 63 14 &nbsp;&nbsp;
          </option>
          <option value="1091">
            MEDJBAR Bania 06 13 73 90 67 &nbsp;&nbsp;
          </option>
          <option value="1233">
            MENDIELA Nancy 07 81 01 20 58 &nbsp;&nbsp;
          </option>
          <option value="902">
            METROT Blandine 07 57 44 24 88 &nbsp;&nbsp;
          </option>
          <option value="1333">MMADINA Ramlati &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="380">
            MOISAN Valérie 07 69 30 85 07 &nbsp;&nbsp;
          </option>
          <option value="1234">
            MOLLICA Marlène 07 69 06 55 58 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="656">
            MOREE Eléonore &nbsp;&nbsp;
          </option>
          <option value="582">MORERE Astrid 07 57 40 35 57 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="518">
            MORIN Annabel &nbsp;&nbsp;
          </option>
          <option value="735">
            MOUCHET Coralie 07 57 40 35 51 &nbsp;&nbsp;
          </option>
          <option value="1251">
            MOULIN Arthur 07 49 82 50 91 &nbsp;&nbsp;
          </option>
          <option value="832">
            MOZIN Virginie 07 57 40 35 42 &nbsp;&nbsp;
          </option>
          <option value="755">MULOT Julien 06 44 95 11 44 &nbsp;&nbsp;</option>
          <option value="74">MULOT Mélanie 06 33 64 66 41 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="112">
            NOLAN Brigitte 06 20 58 50 72 &nbsp;&nbsp;
          </option>
          <option value="1382">NORMAND Faustine &nbsp;&nbsp;</option>
          <option value="651">
            OBERHOFER Laure Karen 07 57 40 35 52 &nbsp;&nbsp;
          </option>
          <option value="1174">
            PANCOTTI Chiara 06 51 56 22 25 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="507">
            PASCAL Anne 06 83 67 60 99 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="796">
            PAYET Joëlle &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="718">
            PERIN Stéphane &nbsp;&nbsp;
          </option>
          <option value="659">
            PERONNY Helene 07 57 44 24 81 &nbsp;&nbsp;
          </option>
          <option value="976">
            PERRACHE Corrine 07 56 92 92 56 &nbsp;&nbsp;
          </option>
          <option value="554">
            PERROT Catherine 07 57 44 24 91 &nbsp;&nbsp;
          </option>
          <option value="910">PIERRET Carole &nbsp;&nbsp;</option>
          <option value="1041">
            PIZZINI Magali 07 57 48 68 28 &nbsp;&nbsp;
          </option>
          <option value="1344">
            PONIN Lucette 07 83 05 93 54 &nbsp;&nbsp;
          </option>
          <option value="524">
            POUCHOULIN Thomas 06 77 44 03 14 &nbsp;&nbsp;
          </option>
          <option value="1170">
            PRAMAYON CHARLOTTE 07 88 61 94 41 &nbsp;&nbsp;
          </option>
          <option value="1025">
            PREZIOSO Ingrid 07 57 44 24 83 &nbsp;&nbsp;
          </option>
          <option value="67">R F &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="658">
            RAMUS Marc 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1330">RANNOU-GONTARD Joëlle &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="605">
            REKKAB Jebril &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="655">
            RIBO Carole &nbsp;&nbsp;
          </option>
          <option value="652">RIVAS Agnès 06 77 98 63 12 &nbsp;&nbsp;</option>
          <option value="1365">RONDWASSER Katia &nbsp;&nbsp;</option>
          <option value="1332">ROSSI Catherine &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="292">
            RUEL Anne-Sophie 07 84 12 48 08 &nbsp;&nbsp;
          </option>
          <option value="811">
            RUNFOLA Danielle 07 57 48 41 72 &nbsp;&nbsp;
          </option>
          <option value="553">
            SABAN Fréderic 07 57 40 35 43 &nbsp;&nbsp;
          </option>
          <option value="1328">
            SAIDANI Nassima 06 95 61 75 62 &nbsp;&nbsp;
          </option>
          <option value="1323">SALEM Inesse Mama &nbsp;&nbsp;</option>
          <option value="1159">
            SAMOUELIAN Anaïde 07 57 40 35 47 &nbsp;&nbsp;
          </option>
          <option value="1060">
            SERS Isabelle 07 88 35 29 93 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="723">
            SIFFERT Nora &nbsp;&nbsp;
          </option>
          <option value="1026">SIROY Stévie &nbsp;&nbsp;</option>
          <option value="977">SOLLY Verena 06 89 99 89 92 &nbsp;&nbsp;</option>
          <option value="715">
            SOUNDARJEE NOURJEAN 06 19 34 91 47 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="481">
            SURGET Marie-C 06 52 31 64 78 &nbsp;&nbsp;
          </option>
          <option value="87">Sans conseiller &nbsp;&nbsp;</option>
          <option value="541">
            TABANI Caroline 07 57 40 35 49 &nbsp;&nbsp;
          </option>
          <option value="1243">TAHAR Sabria &nbsp;&nbsp;</option>
          <option value="1116">
            TERRASSON Clément 06 13 73 48 68 &nbsp;&nbsp;
          </option>
          <option value="849">
            THEVENIN Ariane 07 57 48 54 91 &nbsp;&nbsp;
          </option>
          <option value="838">THORIN Margot 07 57 48 54 88 &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="98">
            TRISCHITTA Audrey 06 77 98 62 44 &nbsp;&nbsp;
          </option>
          <option value="105">
            VANDENBOSSCHE Adeline 06 77 98 63 32 &nbsp;&nbsp;
          </option>
          <option value="983">
            VANDENDRIESSCHE Sonia 07 57 44 24 92 &nbsp;&nbsp;
          </option>
          <option value="1218">VARENNE Léa &nbsp;&nbsp;</option>
          <option value="1438">VIAL Virginie &nbsp;&nbsp;</option>
          <option value="728">VIDY Estelle 06 17 77 79 66 &nbsp;&nbsp;</option>
          <option value="1073">
            VIGNE Nathalie 07 57 48 41 65 &nbsp;&nbsp;
          </option>
          <option value="943">
            VILLETTE Florence 06 18 87 62 75 &nbsp;&nbsp;
          </option>
          <option value="1081">VLAKAKIS Rémy &nbsp;&nbsp;</option>
          <option style="color: #a8a8a8" value="705">
            WALBRECQ Raymond &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="1046">
            WEBER Marie-Noëlle &nbsp;&nbsp;
          </option>
          <option value="855">
            WEISLO Sabrina 07 57 48 68 24 &nbsp;&nbsp;
          </option>
          <option value="978">
            YASMADJIAN Francoise 0681786703 &nbsp;&nbsp;
          </option>
          <option style="color: #a8a8a8" value="825">
            ZEMZEMI Chahnèze 07 57 48 54 90 &nbsp;&nbsp;
          </option>
          <option value="704">ZOULALIAN Marine &nbsp;&nbsp;</option></select
        ><br />
        <br />
        <textarea
          id="note_333194"
          style="height: 100px"
          placeholder="Ajouter une note pour Florent ROUSSEAU"
          onchange="xajax_update_champ('client_prestation','clp_note',333194,this.value,this.id)"
        ></textarea>
      </div>
      <div class="large-3 columns text-left small-margin">
        5041401J<br />
        Début : 08/02/2021 <br />
        fin : 08/04/2021 SPACLN1905
      </div>
    </div>
    <hr />
  </div>
  <div id="contenu_modal2"></div>
</div>
