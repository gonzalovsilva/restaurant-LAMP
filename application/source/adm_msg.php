<?php include 'access.php'; ?>
<!-- MESSAGES PART -->
<?php if (isset($_POST['msgs']) or isset($_POST['msg_del'])) {
    $reponse = $bdd->query('SELECT * FROM contact WHERE msg_subject != 3 ORDER BY id DESC');
?>
    <h2 class="p-3 c-s-light text-center bg-p3">Messages</h2>
    <div class="row p-2 shadow-sm mb-1 p-0 mx-2 rounded-3">
        <div class="col-2 ">Date</div>
        <div class="col-2 ">Name</div>
        <div class="col-6 ">Message</div>
        <div class="col-1 ">See</div>
        <div class="col-1 ">DEL.</div>
    </div>
    <?php
    while ($donnees = $reponse->fetch()) { ?>
        <form class="row p-1 gx-2 shadow-sm mb-1 bg-s-color" method="post">
            <div id="date_<?php echo htmlspecialchars($donnees['id']); ?>" class="col-2 ellipsis">
                <div class="p-1 rounded-3" style="background-color: white;">
                    <?php echo htmlspecialchars($donnees['msg_date']); ?>
                </div>
            </div>
            <div id="name_<?php echo htmlspecialchars($donnees['id']); ?>" class="col-2 ellipsis">
                <div class="p-1 rounded-3" style="background-color: white;">
                    <?php echo
                    '<span id="mail_' . htmlspecialchars($donnees['id']) . '" class="no-display">' . '&lt;' .
                        htmlspecialchars($donnees['mail']) . '&gt; ' . "</span>" .
                        htmlspecialchars($donnees['first_name']) .
                        ' <span id="lastn_' . htmlspecialchars($donnees['id']) . '" class="no-display">' .
                        htmlspecialchars($donnees['last_name']) . "</span>"; ?>
                </div>
            </div>
            <div id="msg_<?php echo htmlspecialchars($donnees['id']); ?>" class="col-6 ellipsis">
                <div class="p-1 rounded-3" style="background-color: white;">
                    <?php echo htmlspecialchars($donnees['msg']); ?>
                </div>
            </div>
            <button id="btn_<?php echo htmlspecialchars($donnees['id']); ?>" type="button" onclick="toggleMsg(<?php echo htmlspecialchars($donnees['id']); ?>)" class="col-1 btn p-0 bg-p-color b-s-light shadow c-s-light b_hover"><i class="fas fa-search-plus"></i>
            </button>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($donnees['id']); ?>">
            <input type="submit" name="msg_del" class="col-1 btn p-0 bg-p-color b-s-light shadow c-s-light b_hover" value="X" />
        </form>
    <?php } ?>
<?php } ?>
<!-- END MESSAGES PART -->