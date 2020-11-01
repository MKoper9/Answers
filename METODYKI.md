METODYKI

1. KISS - podaj negatywny i pozytywny przykład zastosowania tej metodyki?

    W pozytywnym aspekcie pozwala to na łatwe odczytanie kodu oraz jego zrozumienie przez innych programistów oraz tego samego programisty po dłuższym okresie czasu.
    
2. DRY - podaj negatywny i pozytywny przykład zastosowania tej metodyki?

    W pozytywnym sensie metodyka ta zapobiega niepotrzebnemu powielaniu kodu w projekcie. Lepiej te linie wyciągnąć do oddzilenej metody.
    Zmiana kodu wydzielonej metody pozwala na zmniejszenie prawdopodobieństwa pomyłki w kodzie i łatwość jego ewentualnej poprawy.
    
    W negatywnym sensie w razie potrzebnej zmiany powielanej metody w jednym miejscu, zmiana ta powoduje spowoduje zmniejszenie czytelności kodu.

3. SOLID, co według Ciebie jest istotne w tej metodyce, aby zapewnić stabilny i
czytelny projekt?

    Moim zdaniem najbardziej istotne jest to aby każda klasa miałą swoją jednoznaczną odpowiedzialność i zadanie.
    Powoduje to lepszą czytelność, wewntualną modyfikację oraz utrzymanie kodu.

4. Mocking, gdzie się stosuje. Wady i zalety tego rozwiązania.

    Stosuje się tam gdzie w czasie testów należy zastąpić inny niedostępny jeszcze kod obiektem, który będzie implementował zachowanie niedostępnego jeszcze kodu.
    Stosuje się to w testach integracyjnych np. między programem a bazą danych, oraz w interakcjach ze sprzętem.
    Zaletą jest niezależność od niedostępnego lub jeszcze niedoskonałego kodu w innych miejscach.
    Natomiast wadą jest moim zdaniem brak prawdziwego przejścia między aplikacją a urządzeniem.

5. Możesz wymienić inne metodyki niewymienione tutaj, które uważasz za istotne
oraz ich wpływ na projekt.
