CREATE TABLE ChineseText
(
   TextId int,
   Chinese varchar(255),
   Translation varchar(255),
   Primary Key(TextId)
);

INSERT INTO ChineseText Values
(1,"我叫徐文长。","My name is Xu WenChang."),
(2,"我是中国人。","I am from China."),
(3,"我会讲故事。","I am good at story-telling."),
(4,"我会讲花木兰的故事。","I can tell [you] stories about HUA MuLan."),
(5,"这是花木兰","This is Hua MuLan."),
(6,"木兰是一个女孩子","MuLan is a girl."),
(7,"她今年十七岁。","She is (this year) seventeen years old."),
(8,"她会织布，她会写字，她也会武术。","She can weave cloth, she can write characters, [and] she also can do martial arts.");