use mi_app;

-- select title, category_id from posts;
-- select * from addresses;

select state, count(state) as total from addresses group by state order by count(state) desc;