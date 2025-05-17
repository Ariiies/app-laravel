use mi_app;
-- select * from posts where user_id = 101;
select u.name, count(p.user_id) as total_posts from users u join posts p on u.id = p.user_id group by u.name, p.user_id order by count(p.user_id) desc;