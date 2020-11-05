DEPLOYMENT

1. W jaki sposób wrzucasz zmiany na główną gałąź - rebase, czy merge? Jaki sposób wydaje Ci się lepszy i dlaczego?

    Korzystam z merge. Tworzy on commita scalającego i gdy jest konflikt przy scalaniu to jest możliwość ich rozwiązania.
    
2. W jaki sposób wyciągnąć pojedynczy commit z brancha?

    Commity mają swoje numery i przy pomocy 'git checkout "numer commita"' można wyciągnąć tego commita. Historie commitów sprawdzam poleceniem git log --oneline.
    Przy czym --oneline daje wyświetlenie pojedyńczego commit a wjednej linii. 
    
3. Jak cofnąć niechciane zmiany na branchu?

    Jednym sposobem jest odwrócenie zmian przy pomocy git revert "id commita" co spowoduje stworzenie commita do stanu z commita o danym numerze id w poleceniu. 
    Innym sposobem jest cofinięcie zmian przy pomocy polecenia git reset HEAD~1, to polecenie cofa ostatniego commita liczba 1 ilość commitów do cofnięcia (tutaj jeden commit).
    
5. Jak rozwiązuje sie merge conflicts?
    
    W konfliktach wyskakuje okienko z konfliktem w danym pliku ze znakami >>>>> i ======. Należy dany plik z konfliktem zedytować na gotowo i następnie po zapisaniu zmian zrobić merge commita. 
    
6. Jak odłożyć uncommited zmiany lub nadpisać commit w razie gdybyś musiał(a) przejść do pracy nad innym branchem?
    
   Należy skorzystać ze schowka git stash i tam zapisać te zmiany. 
    


 