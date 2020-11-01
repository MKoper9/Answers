DEPLOYMENT

1. W jaki sposób wrzucasz zmiany na główną gałąź - rebase, czy merge? Jaki sposób wydaje Ci się lepszy i dlaczego?

    Korzystam z merge. Tworzy on commita scalającego i gdy jest konflikt przy scalaniu to jest możliwość ich rozwiązania.
    
2. W jaki sposób wyciągnąć pojedynczy commit z brancha?

    Commity mają swoje numery i przy pomocy 'git checkout numer' można wyciągnąć tego commita. Historie commitów sprawdzam poleceniem git log 
    
3. Jak cofnąć niechciane zmiany na branchu?

    Przy pomocy polecenia git reset HEAD~1, to polecenie cofa ostatniego commita liczba 1 ilość commitów do cofnięcia.
    
5. Jak rozwiązuje sie merge conflicts?
    
    W konfliktach wyskakuje okienko z konfliktem w danym pliku ze znakami >>>>> i ======. Należy dany plik zedytować na gotowo i następnie po zapisaniu zmian zrobić merge commita. 
    
6. Jak odłożyć uncommited zmiany lub nadpisać commit w razie gdybyś musiał(a) przejść do pracy nad innym branchem?
    
   Należy skorzystać ze schowka git stash i tam zapisać te zmiany. 
    


 