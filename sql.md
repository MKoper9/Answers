Zad 1 

SELECT lotteries.slug, lottery_tickets.created_at FROM lotteries JOIN lottery_tickets ON lotteries.id = lottery_tickets.lottery_id WHERE
Month(lottery_tickets.created_at)=3 AND YEAR(lottery_tickets.created_at)=2020;


Zad 2

SELECT COUNT(id) FROM lotteries WHERE timezone = ?;