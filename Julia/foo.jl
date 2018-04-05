using Winston

# plot some data
pl = plot(cumsum(rand(500) .- 0.5), "r", cumsum(rand(500) .- 0.5), "b")

foo = 23

# display the plot (not done automatically!)
display(pl)