// Fonction pour recalculer le stock final théorique
function recalculateStockFinal() {
    var rows = document.querySelectorAll('.table tbody tr');
    
    rows.forEach(function(row) {
        var cells = row.querySelectorAll('td');
        var achat = parseInt(cells[4].textContent);
        var totalPoints = 0;
        
        for (var i = 5; i < cells.length - 4; i++) {
            var pointValue = parseInt(cells[i].textContent);
            totalPoints += isNaN(pointValue) ? 0 : pointValue;
        }
        
        var stockInitial = parseInt(cells[2].textContent);
        var consignationInitiale = parseInt(cells[1].textContent);
        var consignationJour = parseInt(cells[cells.length - 4].textContent);
        
        var stockFinalTheorique = stockInitial + achat - totalPoints + consignationInitiale + consignationJour;
        
        // Mettre à jour la cellule stock final théorique avec le calcul
        cells[cells.length - 3].textContent = stockFinalTheorique;
    });
}
