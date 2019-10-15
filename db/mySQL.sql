CREATE TABLE "users" ("id" SERIAL PRIMARY KEY, "user_name" varchar, "user_type" varchar);
CREATE TABLE "comments" ("id" SERIAL PRIMARY KEY, "comment_title" varchar, "created_at" varchar, "comment_text" varchar, "users_id" int);
CREATE TABLE "ratings" ("id" SERIAL PRIMARY KEY, "rating" int, "users_id" int);

ALTER TABLE "comments" ADD FOREIGN KEY ("users_id") REFERENCES "users" ("id");
ALTER TABLE "ratings" ADD FOREIGN KEY ("users_id") REFERENCES "users" ("id");

INSERT INTO users (user_name, user_type) VALUES ('Sam', 'Homeowner');
INSERT INTO users (user_name, user_type) VALUES ('Jeff', 'Landscape Designer');

INSERT INTO comments (comment_title, comment_text, users_id) VALUES ('Quick Workers!', 'I was wondering if it would be a day job and we decided it would be and it worked out great! Good professionalism as well!', 1);
INSERT INTO comments (comment_title, comment_text, users_id) VALUES ('Attention to Detail', 'The landscaper did a good job of finishing off by hand the curbs.', 2);

INSERT INTO ratings (rating, users_id) VALUES (5, 1);
INSERT INTO ratings (rating, users_id) VALUES (5, 2);

