<?php include 'partials/header.view.php'; ?>
<body>
    <?php include 'partials/nav.view.php'; ?>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nume">Nume</label>
                    <input type="text" name="nume" id="nume">
                </div>
                <div class="mb-3">
                    <label for="prenume">Prenume</label>
                    <input type="text" name="prenume" id="prenume">
                </div>
                <!-- Adaugarea campurilor neajunse Loc si Zbor -->
                <div class="mb-3">
                    <label for="nume">Loc</label>
                    <input type="text" name="loc" id="loc">
                </div>
                <div class="mb-3">
                    <label for="prenume">Zbor</label>
                    <input type="text" name="zbor" id="zbor">
                </div>
                <button type="submit" class="btn-save">Save</button>
            </form>
        </div>
        <div class="elevi">
            <h4>Lista pasagerilor</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        <th>Prenume</th>
                        <th>Loc</th>
                        <th>Nume zbor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($query as $pasager): ?>
                        <tr>
                              <!-- Afisarea datelor loc si zbor -->
                            <td><?= $pasager->id; ?></td>
                            <td><?= $pasager->nume; ?></td>
                            <td><?= $pasager->prenume; ?></td>
                            <td><?= $pasager->loc; ?></td>
                            <td><?= $pasager->zbor; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>