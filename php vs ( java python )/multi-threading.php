/*
we wouldn't support multi-threading,
We assume that all request that comes is CPU intensive,
and we give this job to Apache to take care of.
And As a back-end engineer rarely use IO multi-threading,
and for the rare cases we provide a work around.

https://www.reddit.com/r/webdev/comments/q8k3qc/how_often_is_multithreading_is_used_in_backend/
https://stackoverflow.com/questions/8791115/querying-an-api-with-php-in-a-parallel-way

*/