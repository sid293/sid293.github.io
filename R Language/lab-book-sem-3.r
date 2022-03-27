#list containing vector
lcv <- list("start",32,c(3,2,1))
mat = matrix(c(8,4,5,6,7,9),nrow = 2, ncol = 3,byrow = TRUE)

#sort in ascending and decending order
x = c(10, 20, 30, 25, 9, 26)
print(sort(x))
print(sort(x, decreasing=TRUE))

#sum mean and product of vector
vec01 <- c(2,2,2)
vec02 <- c(5,10,15)
sum <- vec01 + vec02
product <- vec01 * vec02
product
mean <- mean(vec02)
mean

#list containing four vectors named.
vec3 <- c(21,21,22)
vec4 <- c(4,4,5)
vec5 <- c(5,6,7)
veclist <- list(vec3="first-vec","second-vec"=vec4,vec5="third-vec")
names(veclist)
veclist

#concatinating lists
lambs = list(2,3,4)
pambs = list(32,33)
rams = c(lambs,pambs)
rams

#converting list to vector
new = list(34,55)
new
unlist(new)
new

#list strating from E and 15 characters
s = LETTERS[match("E", LETTERS):(match("E", LETTERS)+15)]
s
