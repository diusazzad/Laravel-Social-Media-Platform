Image Upload: users should be able to upload images from their mobile devices.the system should support different image formats and sizes.

Like and comment: Users should be able to like and comment on images.view the likes and comments 
on images.Receive notifications when their images are liked or commented.

Follow: Users should be able to follow other users.Users should receive notifications when they are followed by other users.

News Feed : System should generate a news feed of images. The news feed should be sorted based on relevancy and freshness.

Extras

Authentication, Messaging, Analytics/Reporting, Advertisement

Technical requirements

the system should support imaage formats such as jpge, png, gfi.
the maximum allowed image side should be 100mb.
the system should be able to handle at lease 100,000 concurrent uploads.
upload 10 images/day with a maximum of 500 image/month
handle at least 1 minilon concurrent link and comments
handle at lease 1 bilion registered users.
users should be able to follow at lease 1000 other users

1. Storage Capacity

    avarage image size = 5mb
    each user uploads =10 images/day
    maximum storage capacity = 10,000,000 gb (10peta byte)
 
    1,000,000 gb (1 exabyte) per month

2. Network bandwidth 
    Avarage image upload time = 5 sec
    concurrent uploads = 100,000
    Min network bandwidth = 50 gbps

3. Compute Resources
    Concurrent uploads = 100,000
    processing cores = 100,000
    1 server  = 32 cores
    total servers required = 3125
4. Database Capacity
    5 likes/comments per image
    metadata size per image = 25 bytes
    1 milion concurrent linkes and comments = 25 mbps , 1million * 25 bytes per second

5. Database Schema 
    User Table 
        user_id, username, email, password, created_at, updated_at
    Post Table 
        post_id,user_id,caption,image_url, created_at,updated_at
    Link Table 
        like_id,user_id,post_id,create_at
    Comment Table
        comment_id,user_id,post_id,comment_text, created_at
    Follow Table
        follow_id,follower_user_id, following_user_id,created_at
