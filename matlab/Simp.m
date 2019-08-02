function I = Simp(f,a,b,n)

h = (b-a)/n;

for i = 1 : n+1
    y(i) = a + h*(i-1);
end

I = 0;

for j = 1 : n
    I = I + Simple(f,y(j),y(j+1));
end


