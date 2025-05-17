use mi_app;

-- select p.title, c.name as category from posts p join categories c on p.category_id = c.id group by p.title, c.name;
select c.name as category, count(p.category_id) as total_posts from categories c join posts p on c.id = p.category_id group by c.name, p.category_id order by count(p.category_id) desc;