#data types
yau = 1+2
mau <- 45 
imgd <- T
string = "stringy things"
factor = as.factor("Games")
vec1 <- c(one = 1,three = 3,four = 4,5)
vec2 <- c(T,FALSE,F,T)
vec3 <- factor(c("c","php","java"))
vec4 <- c('regualr strings', "mulitple quotes")
mylist <- list(vec1 , vec2 , vec3)
mysuperlist <- list(vec3 , vec2 ,childlist = list(vec1 , vec3))
df <- data.frame(nums = vec1,factors =  vec2)
mat <- matrix(vec1, 2,2)
View(mat)
vec1[3]
34:40
vec1[1:4]
vec1
vec1[vec2]
names(vec1)
mylist[[2]]
mat[2,]

addition <- function(firstnum , secondnum){
  result <- firstnum + secondnum
  return(result)
}
addition(32,33)

#sort() ascending-default decending - decreasing = TRUE
x = c(10, 20, 30, 25, 9, 26)
print(sort(x))
print(sort(x, decreasing=TRUE))

#Write a R program to find all elements of a given list that are not in another given list

#write a r program to extract all elements except the third element of the first vector of a given list
#a. Given names to the elements in the list 
#b. Add an element at the end of the list
#c. Remote the last element
#d. update the 3rd element
